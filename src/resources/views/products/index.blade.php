@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col s6">
                <h3>Productos</h3>
                <h5>Total: {{ $total }}</h5>
            </div>
            <div class="col s6">
                <div class="right-align" style="padding-top: 2rem">
                    <a href="{{ url('productos/create') }}" class="btn-floating btn-large waves-effect waves-light blue">
                        <i class="material-icons">add</i>
                    </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col m3">
                <h5>Busqueda</h5>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Productos</label>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Categoria</label>
                    </div>
                </form>
            </div>
            <div class="col m9">
                @foreach ($products->chunk(3) as $rows)
                    <div class="row">
                        @foreach($rows as $item)
                            <product-card :product="{{ $item }}">
                            </product-card>
                        @endforeach
                    </div>
                @endforeach
                
                <div class="col s12">
                    {{ $products->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>



    </div>
@stop