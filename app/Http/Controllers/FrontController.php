<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Product;
use App\Category;
use App\CategoryProduct;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 9;
        $categories = Category::all();
        $latestProducts = Product::where('featured', true)->paginate(3);
        $featuredProducts = Product::where('featured', true)->paginate(3);
        
        //Sort products by category
        if (request()->categoria) {
            $category_slug = request()->categoria;             
            //inner join.
            

            $products = Product::join('category_product', 'products.id', '=', 'category_product.product_id')
            ->select('category_product.*', 'products.name', 'products.price')->where('category_slug', $category_slug)
            ->get(); 

        } else {
            $products = Product::all();
        }
        //
        
        //Sort products by low-high
        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price');
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc');
        } else {
            $products = $products;
        }
        //

        return view('front.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'latestProducts' => $latestProducts,
            'featuredProducts' => $featuredProducts,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

        $stockLevel = getStockLevel($product->quantity);

        return view('product')->with([
            'product' => $product,
            'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        // $products = Product::where('name', 'like', "%$query%")
        //                    ->orWhere('details', 'like', "%$query%")
        //                    ->orWhere('description', 'like', "%$query%")
        //                    ->paginate(10);

        $products = Product::search($query)->paginate(10);

        return view('search-results')->with('products', $products);
    }

    public function searchAlgolia(Request $request)
    {
        return view('search-results-algolia');
    }
}
