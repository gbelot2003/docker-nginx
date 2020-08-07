@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s6">
      <h2>Usuarios</h2>
      <example-component></example-component>
    </div>
    <div class="col s6">
      <div class="right-align" style="padding-top: 2rem">
        <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Usuario</label>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <ul class="collection">
      @foreach ($users as $user)
        @if($user->status != 1)
          <li class="collection-item avatar">
            {{-- <img src="images/yuna.jpg" alt="" class="circle"> --}}
            <i class="material-icons circle red">folder</i>
            <span class="title red-text"><strike>{{ $user->email }}</strike></span>
            <p class="sub-title"><strike>{{ $user->name }}</strike></p>
             <p class="font-weight-bold" style="font-size: 12px">
               <strike>{{ $user->roles[0]->name }}</strike>
             </p>
            <a href="{{ $user->id }}" class="secondary-content"><i class="material-icons">chevron_right</i></a>
          </li>
        @else
          <li class="collection-item avatar">
            {{-- <img src="images/yuna.jpg" alt="" class="circle"> --}}
            <i class="material-icons circle blue">folder</i>
            <span class="title red-text">{{ $user->email }}</span>
            <p class="sub-title">{{ $user->name }}</p>
            <p class="font-weight-bold" style="font-size: 12px"> {{ $user->roles[0]->name }}</p>

            <a href="{{ url('usuarios', $user->id) }}" class="secondary-content">
              <i class="material-icons">chevron_right</i>
            </a>
          </li>
        @endif

      @endforeach
    </ul>
    {{ $users->links('vendor.pagination.default') }}
  </div>
</div>

@endsection