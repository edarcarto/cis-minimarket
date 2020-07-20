@extends('layouts.web')
@section('js&css')
<link href="{{ secure_asset('css/cart/index.css') }}" media="all" rel="stylesheet" type="text/css" />
<script src="https://checkout.culqi.com/js/v3"></script>
<script src="{{ secure_asset('js/cart/index.js') }}"></script>
@endsection
@section('content')
<div class="cart-wrap">
		<div class="container">
			<input type="hidden" name="idUser" id="idUser" value="{{(auth() && auth()->user()) ? auth()->user()->id : '' }}">
	        <div class="row">
			    <div class="col-lg-8">
			        <div class="main-heading">Carrito</div>
			        <div class="table-cart">
	                    <table>
	                        <thead>
	                            <tr>
	                                <th>Producto</th>
	                                <th>Cantidad</th>
	                                <th>Total</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
								@foreach($cart as $c)
	                            <tr>
	                                <td>
	                                	<div class="display-flex align-center">
		                                    <div class="img-product">
												<img src="{{$c->attributes->all->product_images[0]->url}}" class="mCS_img_loaded">
		                                    </div>
		                                    <div class="name-product">
		                                        {{$c->name}}
		                                        <!-- <br>Light -->
		                                    </div>
		                                    <div class="price">
		                                        S/{{$c->price}}
												<input type="hidden" class="sumPriceCart" name="sumPriceCart[]" value="{{$c->price}}">
		                                    </div>
	                                    </div>
	                                </td>
	                                <td class="product-count">
	                                    <form action="#" class="count-inlineflex">
											<input type="hidden" name="id" value="{{$c->id}}" class="idCart">
										    <div class="qtyminus">-</div>
										    <input type="text" name="quantity" value="{{$c->quantity}}" class="qty">
										    <div class="qtyplus">+</div>
										</form>
	                                </td>
	                                <td>
	                                    <div class="total">
	                                        S/{{$c->getPriceSum()}}
	                                    </div>
	                                </td>
	                                <td>
									{!! Form::open(['route' => ['delCart', $c->id], 'method' => 'delete']) !!}
										{!! Form::button('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
											<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
											</svg>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
									{!! Form::close() !!}
	                                </td>
	                            </tr>
								@endforeach
	                        </tbody>
	                    </table>
	                    <div class="coupon-box">
	                        <form action="#" method="get" accept-charset="utf-8">
	                            <div class="coupon-input">
	                                <input type="text" name="coupon" placeholder="codigo cupon">
	                                <button type="submit" class="round-black-btn">Aplicar Descuento</button>
	                            </div>
	                        </form>
	                    </div>
			        </div>
			        <!-- /.table-cart -->
			    </div>
			    <!-- /.col-lg-8 -->
			    <div class="col-lg-4">
			        <div class="cart-totals">
			            <h3>Resumen</h3>
			            <form action="#" method="get" accept-charset="utf-8">
			                <table>
			                    <tbody>
			                        <tr>
			                            <td>Subtotal</td>
			                            <td class="subtotal">S/0.00</td>
			                        </tr>
			                        <!-- <tr>
			                            <td>IGV</td>
			                            <td class="igv">S/{{ $igv }}</td>
			                        </tr> -->
									<tr>
			                            <td>Delivery</td>
			                            <td class="free-shipping">S/0.00</td>
			                        </tr>
			                        <tr class="total-row">
			                            <td>Total</td>
			                            <td class="price-total">S/0.00</td>
			                        </tr>
			                    </tbody>
			                </table>
			                <div class="btn-cart-totals">
			                    <!-- <a href="#" class="update round-black-btn" title="">Actualizar Carrito</a> -->
			                    <a href="#" id="buyButton" class="checkout round-black-btn" title="">Pagar</a>
			                </div>
			                <!-- /.btn-cart-totals -->
			            </form>
			            <!-- /form -->
			        </div>
			        <!-- /.cart-totals -->
			    </div>
			    <!-- /.col-lg-4 -->
			</div>
		</div>
	</div>
	<div id="myModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Atención</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<p>Usted no ha iniciado sesión.</p>
		</div>
		<div class="modal-footer">
			<a href="/login"  class="btn btn-primary">Iniciar Sesión</a>
			<a href="/register" class="btn btn-secondary" >Registrarse</a>
		</div>
		</div>
	</div>
	</div>
@endsection
