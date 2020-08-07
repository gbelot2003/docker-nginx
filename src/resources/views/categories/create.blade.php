@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Agregar Categoria</h3>
            </div>
        </div>

        <div class="row">
            <form action="/categorias" method="POST" class="col s12" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m12">
                        <input name="name" type="text" class="validate">
                        <label for="name">Nombre del producto</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m12">
                        <textarea name="description" class="materialize-textarea validate"></textarea>
                        <label for="description">Descripción del producto</label>
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