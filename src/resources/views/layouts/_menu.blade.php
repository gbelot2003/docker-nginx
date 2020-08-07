@guest
<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
@if (Route::has('register'))
    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
@endif
@else
    <li>
        <a class="dropdown-trigger" href="#!" data-target="dropdown1">
            {{ Auth::user()->name }}
            <i class="material-icons right">arrow_drop_down</i>
        </a>
    </li>
@endguest