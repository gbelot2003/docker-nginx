@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s10">
                <h2>{{ $user->name }}</h2>
            </div>

            <div class="col s2">
                <div class="right-align" style="padding-top: 2rem">
                    <a class="btn-floating btn-large waves-effect waves-light blue"
                        href="/usuarios/{{ $user->id }}/edit">
                        <i class="material-icons">edit</i>
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col s12">
                <h4>Historial</h4>
            </div>
        </div>
    </div>

@stop