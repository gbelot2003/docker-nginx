@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
               <h3>Agregar nuevo producto</h3>
            </div>
        </div>

        <div class="row">
            <form action="/productos" method="POST" class="col s12" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input name="name" type="text" class="validate">
                        <label for="name">Nombre del producto</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input name="price" type="number" step=".01" class="validate">
                        <label for="name">Precio del producto</label>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="description" class="materialize-textarea validate"></textarea>
                        <label for="description">Descripción del producto</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <label>Seleccionar categoria</label>
                        <select name="category_id" id="category_id">
                            <option value="" selected="selected">--Categorias--</option>
                            @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input name="image" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </form>
        </div>

    </div>
@stop