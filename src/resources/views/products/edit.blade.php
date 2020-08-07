@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                {{ $product->name }}
            </div>
        </div>
    </div>
@stop