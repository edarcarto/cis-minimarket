@extends('layouts.web')
@section('js&css')
<link href="{{ secure_asset('css/cart/index.css') }}" media="all" rel="stylesheet" type="text/css" />
<script src="{{ secure_asset('js/cart/index.js') }}"></script>
@endsection
@section('content')
<div class="cart-wrap">
		<div class="container">
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
	                            <tr>
	                                <td>
	                                	<div class="display-flex align-center">
		                                    <div class="img-product">
												<img src="{{ secure_asset('img/portal/cola.jpg') }}" class="mCS_img_loaded">
		                                    </div>
		                                    <div class="name-product">
		                                        Coca Cola
		                                        <br>Light
		                                    </div>
		                                    <div class="price">
		                                        S/2.50
		                                    </div>
	                                    </div>
	                                </td>
	                                <td class="product-count">
	                                    <form action="#" class="count-inlineflex">
										    <div class="qtyminus">-</div>
										    <input type="text" name="quantity" value="1" class="qty">
										    <div class="qtyplus">+</div>
										</form>
	                                </td>
	                                <td>
	                                    <div class="total">
	                                        S/2.50
	                                    </div>
	                                </td>
	                                <td>
	                                    <a href="#" title="">
	                                        <img src="images/icons/delete.png" alt="" class="mCS_img_loaded">
	                                    </a>
	                                </td>
	                            </tr>
	                            <tr>
	                                <td>
	                                	<div class="display-flex align-center">
		                                    <div class="img-product">
												<img src="{{ secure_asset('img/portal/cola-2.jpg') }}" class="mCS_img_loaded">
		                                    </div>
		                                    <div class="name-product">
		                                        Coca Cola
		                                        <br>Nomal Jumbo
		                                    </div>
		                                    <div class="price">
		                                        S/4.50
		                                    </div>
	                                    </div>
	                                </td>
	                                <td class="product-count">
	                                    <form action="#" class="count-inlineflex">
										    <div class="qtyminus">-</div>
										    <input type="text" name="quantity" value="1" class="qty">
										    <div class="qtyplus">+</div>
										</form>
	                                </td>
	                                <td>
	                                    <div class="total">
	                                        S/4.50
	                                    </div>
	                                </td>
	                                <td>
	                                    <a href="#" title="">
	                                        <img src="images/icons/delete.png" alt="" class="mCS_img_loaded">
	                                    </a>
	                                </td>
	                            </tr>
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
			                            <td class="subtotal">S/5.74</td>
			                        </tr>
			                        <tr>
			                            <td>IGV</td>
			                            <td class="free-shipping">S/1.26</td>
			                        </tr>
			                        <tr class="total-row">
			                            <td>Total</td>
			                            <td class="price-total">S/7.00</td>
			                        </tr>
			                    </tbody>
			                </table>
			                <div class="btn-cart-totals">
			                    <a href="#" class="update round-black-btn" title="">Actualizar Carrito</a>
			                    <a href="#" class="checkout round-black-btn" title="">Pagar</a>
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
@endsection
