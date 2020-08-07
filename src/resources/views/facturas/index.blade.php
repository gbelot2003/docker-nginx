@extends('layouts.app')

@section('content')
    <facturas :items="{{ $facturas }}"></facturas>
@stop