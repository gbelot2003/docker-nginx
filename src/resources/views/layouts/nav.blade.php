<!-- Dropdown Structure -->
@auth
    <ul id="dropdown1" class="dropdown-content">
        @include('layouts._dropdown')
    </ul>   
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> 
@endauth

@auth
    <ul id="dropdown2" class="dropdown-content">
        @include('layouts._dropdown')
    </ul>   
@endauth

<ul id="slide-out" class="sidenav">
    @include('layouts._menu')
</ul>

<nav class="indigo darken-1">
    <div class="nav-wrapper">
        <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name', 'SCD') }}</a>
       
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            @include('layouts._menu')
        </ul>
      
        {{-- Slider --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

