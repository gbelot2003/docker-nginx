@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-title">{{ __('Login') }}</div>
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="row">

                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                @error('email')
                                    <span class="helper-text red-text" data-error="wrong">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="password" class="">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                          
                        
                        <div class="row">
                            <p class="col s12">
                                <label>
                                     <input type="checkbox" ame="remember" class="indigo darken-1" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                     <span>{{ __('Remember Me') }}</span>
                                 </label>
                             </p>

                            <div class="col s12">

                                <button type="submit" class="waves-effect waves-light btn indigo darken-1">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="waves-effect waves-light btn indigo darken-1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
