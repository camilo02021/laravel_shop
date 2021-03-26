<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
        <div class="container">
            @foreach ($orders as $order)
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5> &nbsp;&nbsp;  Orden  </h5>
                        <ul>
                            <li>Ref <span>{{ $order->id }}</span></li>
                            <li>Fecha <span>{{ $order->created_at }}</span></li>
                            <li>Total <span>{{ $order->billing_total }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Producto</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            @foreach ($order->products as $product)
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset($product->image) }}" alt="Product Image">
                                    </td>
                                    <td class="shoping__cart__price">
                                        <h5> <a href="#">{{ $product->name }}</a></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $product->price }}
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{ $product->pivot->quantity }}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Shoping Cart Section End -->


