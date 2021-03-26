<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Darryldecode\Cart\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Cart::getContent()->count() == 0) {
            return back()->withErrors('No tienes productos en la cesta de compras... ');
        }

        if (auth()->user() && request()->is('guestCheckout')) {
            return redirect()->route('checkout.index');
        }

        $cartItems=\Cart::getContent();
        $cartTotal=\Cart::getTotal();
        $cartCount=\Cart::getContent()->count();

        return view('cart.checkout')->with([
            
            'cartItems' => $cartItems,
            'cartTotal' => $cartTotal,
            'cartCount' => $cartCount,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        // Check race condition when there are less items available to purchase
        
            foreach (\Cart::getContent() as $item) {
                $product = Product::find($item->id);
                if ($product->quantity < $item->qty) {
                    $productName = $product->name;
                    $productQty = $product->quantity;
                    break;
                }
            }

            if ($this->productsAreNoLongerAvailable()) {
                $message = ' se ha agotado, o no hay las unidades disponibles que pides... Quedan: ';
                return back()->withErrors($productName.$message.$productQty);
            }
        
        $contents = \Cart::getContent()->map(function ($item) {
            return $item->slug.', '.$item->qty;
        })->values()->toJson();

        try {
           
            $order = $this->addToOrdersTables($request, null);
            

            // decrease the quantities of all the products in the cart
            $this->decreaseQuantities();
/*
            \Cart::remove();
            session()->forget('coupon');*/

            return redirect()->route('user.orders')->with('success_message', 'Gracias! Su orden ha sido enviada...!');
        } catch (CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }


    protected function addToOrdersTables($request, $error)
    {
        
        
        foreach (\Cart::getContent() as $item) {
            $product = Product::find($item->id);
            $product_tienda = $product->tienda_id;
            break;
        }
  
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'tienda_id' => $product_tienda,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_province' => $request->province,
            'billing_phone' => $request->phone,
            //'billing_discount' => getNumbers()->get('discount'),
            //'billing_discount_code' => getNumbers()->get('code'),
            'billing_subtotal' => \Cart::getSubTotal(),
            'billing_tax' => 0,
            'billing_total' => \Cart::getTotal(),
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (\Cart::getContent() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }


    protected function decreaseQuantities()
    {
        foreach (\Cart::getContent() as $item) {
            $product = Product::find($item->id);

            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (\Cart::getContent() as $item) {
            $product = Product::find($item->id);
            if ($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
    }
}
