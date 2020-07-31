@if(Auth::user()->type_user_id == 1)
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('trademarks*') ? 'active' : '' }}">
    <a href="{{ route('trademarks.index') }}"><i class="fa fa-edit"></i><span>Marcas</span></a>
</li>
<li class="{{ Request::is('suppliers*') ? 'active' : '' }}">
    <a href="{{ route('suppliers.index') }}"><i class="fa fa-edit"></i><span>Proveedores</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-edit"></i><span>Ordenes</span></a>
</li>

<li class="{{ Request::is('shippers*') ? 'active' : '' }}">
    <a href="{{ route('shippers.index') }}"><i class="fa fa-edit"></i><span>Envios</span></a>
</li>

<li class="{{ Request::is('userTypes*') ? 'active' : '' }}">
    <a href="{{ route('userTypes.index') }}"><i class="fa fa-edit"></i><span>Tipo de usuario</span></a>
</li>
@endif
@if(Auth::user()->type_user_id == 3)
<li class="{{ Request::is('my-orders') ? 'active' : '' }}">
    <a href="{{ route('my-orders') }}"><i class="fa fa-edit"></i><span>Mis pedidos</span></a>
</li>

<li class="{{ Request::is('wishlist') ? 'active' : '' }}">
    <a href="{{ route('wishlist') }}"><i class="fa fa-edit"></i><span>Lista de deseos</span></a>
</li>
@endif
