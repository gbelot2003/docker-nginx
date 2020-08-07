<li><a href="/pedidos">Pedidos</a></li>
<li><a href="/usuarios">Users</a></li>
<li><a href="/productos">Productos</a></li>
<li><a href="/categorias">Categorias</a></li>
<li>
    <div class="divider"></div>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
    document.getElementById('logout-form').submit();">{{ __('Logout') }}
    </a>
</li>