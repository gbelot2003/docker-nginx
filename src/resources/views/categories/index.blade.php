@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s6">
                <h2>Categorias</h2>
            </div>
            <div class="col s6">
                <div class="right-align" style="padding-top: 2rem">
                    <a href="/categorias/create" class="btn-floating btn-large waves-effect waves-light blue">
                        <i class="material-icons">add</i>
                    </a>
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
                            <label for="icon_prefix">Categorias</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <ul class="collection">
                @foreach ($categs as $categ)
                        <li class="collection-item avatar">
                            <i class="material-icons circle blue">folder</i>
                            <p class="sub-title">{{ $categ->name }}</p>

                            <a href="{{ url('categorias', $categ->id) }}" class="secondary-content">
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </li>
                @endforeach
            </ul>
            {{ $categs->links('vendor.pagination.default') }}
        </div>
    </div>

@endsection