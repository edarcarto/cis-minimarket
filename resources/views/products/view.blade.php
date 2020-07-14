@extends('layouts.web')
@section('js&css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link href="{{ secure_asset('css/products/view.css') }}" media="all" rel="stylesheet" type="text/css" />
<script src="{{ secure_asset('js/products/view.js') }}"></script>
@endsection
@section('content')
<div class="pd-wrap">
<div class="container">
        <div class="heading-section">
            <h2>Detalle del Producto</h2>
            @include('flash::message')
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="slider" class="owl-carousel product-slider">
                @foreach($product->product_images as $pi)
                    <div class="item">
                        <img src="{{ $pi->url }}">
                    </div>
                @endforeach
                </div>
                <div id="thumb" class="owl-carousel product-thumb">
                @foreach($product->product_images as $pi)
                    <div class="item">
                        <img src="{{ $pi->url }}">
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name">{{$product->product_name}}</div>
                        <div class="reviews-counter">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                                </div>
                            <span>3 Reviews</span>
                        </div>
                        <div class="product-price-discount"><span>S/{{$product->unit_price}}</span></div>
                        <!-- <span class="line-through">$29.00</span> -->
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="product-count">
                        <label for="size">Cantidad</label>
                        <form method="GET" action="/add-to-cart">
                            @csrf
                            <div class="caja_producto">
                                <div class="qtyminus">-</div>
                                <input type="hidden" id="id" name="id" value="{{$product->id}}">
                                <input type="text" id="quantity" name="quantity" value="1" class="qty">
                                <div class="qtyplus">+</div>
                            </div>
                            <button type="submit" class="round-black-btn">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    {{$product->description}}
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="review-heading">REVIEWS</div>
                    <p class="mb-20">No hay disponibles de momento.</p>
                    <form class="review-form">
                        <div class="form-group">
                            <label>Tu voto</label>
                            <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 estrellas</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 estrellas</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 estrellas</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 estrellas</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 estrella</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tu mensaje</label>
                            <textarea class="form-control" rows="10"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Name*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Email Id*">
                                </div>
                            </div>
                        </div>
                        <button class="round-black-btn">Enviar Review</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection