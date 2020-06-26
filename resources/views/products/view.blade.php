@extends('layouts.app')
@section('js&css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link href="{{ asset('css/products/view.css') }}" media="all" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/products/view.js') }}"></script>
@endsection
@section('content')
<div class="pd-wrap">
<div class="container">
        <div class="heading-section">
            <h2>Detalle del Producto</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="slider" class="owl-carousel product-slider">
                    <div class="item">
                        <img src="{{ asset('img/portal/cola.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-2.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-3.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-4.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-5.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-6.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-7.jpg') }}">
                    </div>
                </div>
                <div id="thumb" class="owl-carousel product-thumb">
                    <div class="item">
                        <img src="{{ asset('img/portal/cola.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-2.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-3.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-4.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-5.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-6.jpg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/portal/cola-7.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name">Coca Cola Jumbo</div>
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
                        <div class="product-price-discount"><span>S/2.50</span></div>
                        <!-- <span class="line-through">$29.00</span> -->
                    </div>
                    <p>Coca-Cola, conocida comúnmente como Coca en muchos países hispanohablantes, es una bebida gaseosa y refrescante vendida a nivel mundial, en tiendas, restaurantes y máquinas expendedoras en más de doscientos países o territorios. Es un producto de The Coca-Cola Company, de origen estadounidense.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="size">Tamaños</label>
                            <select id="size" name="size" class="form-control">
                                <option>Personal</option>
                                <option>Jumbo</option>
                                <option>2Lt</option>
                                <option>3lt</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="color">Tipo</label>
                            <select id="color" name="color" class="form-control">
                                <option>Light</option>
                                <option>Normal</option>
                                <!-- <option>Red</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="product-count">
                        <label for="size">Cantidad</label>
                        <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                        <a href="#" class="round-black-btn">Agregar al Carrito</a>
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
                    Coca-Cola, conocida comúnmente como Coca en muchos países hispanohablantes, es una bebida gaseosa y refrescante vendida a nivel mundial, en tiendas, restaurantes y máquinas expendedoras en más de doscientos países o territorios. Es un producto de The Coca-Cola Company, de origen estadounidense.
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
