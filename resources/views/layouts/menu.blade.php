<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('trademarks*') ? 'active' : '' }}">
    <a href="{{ route('trademarks.index') }}"><i class="fa fa-edit"></i><span>Marcas</span></a>
</li>
<li class="{{ Request::is('suppliers*') ? 'active' : '' }}">
    <a href="{{ route('suppliers.index') }}"><i class="fa fa-edit"></i><span>Proveedores</span></a>
</li>

