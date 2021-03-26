<style>
.center {
  margin: auto;
  border: 1px solid #73AD21;
  padding: 0px;
  text-align : center;
}
</style>
<div id="products">
    <div class="section-title">
        <h2>Productos Frescos</h2>
    </div>
    <div class="row">
   
        @forelse($products as $product)
            <div class="small-3 medium-3 large-3 columns">

                <product-detail :product="{{$product}}"
                    productlink="{{ route('product.show', ['product' => $product->id]) }}"
                    productimagepath='{{asset("images/$product->image")}}'
                ></product-detail>

            </div>
    
            <div class="small-3 medium-3 large-3 columns">
                <div class="center" > 

                    <div class="item-wrapper">
               
                        <h5>
                            U/Medida
                        </h5>
                        <p>
                            {{$product->medida}}
                        </p>
                        <h3 style='color:green'>
                            Disponible
                        </h3>
             
                    </div>

                </div>
           
            </div>

            
            <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3> {{$product->name}} </h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product__details__price"> {{$product->price}}</div>
                        <p> {{$product->description}}</p>
                        <ul>
                            <li><b>Domicilio</b> <span style='color:green'> Gratis <samp> -/- O recoge en el establecimiento</samp></span></li>
                            <li><b>Entrega</b> <span  style='color:green'>30 - 90 min <samp> -/- O de un día para otro</samp></span></li>
                            <li><b>Peso/U</b> <span>{{$product->peso}} {{$product->medida}}</span></li>
                            <li><b>Comparte en</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="col-lg-12">
                    <div class="product__details__tab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Beneficios de este producto</h6>
                                    <p>Descripcion de los beneficios.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @empty
            <h3>No products</h3>
        @endforelse
     
    </div>
</div>