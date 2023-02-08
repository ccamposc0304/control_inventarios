@extends('layouts.app')

@section('content')

<div class="container text-center">
<div class="card product text-left">

    <!-- valida si un usuario esta logueado -->
    @if(Auth::check() && $product->user_id == Auth::user()->id)

    <div class="absolute actions">
    <a href="{{url('/products/'.$product->id.'/edit')}}">
            EDITAR
            </a>

            @include('products.delete',['product' => $product])
    </div>

    @endif

    <h1>{{$product->title}}</h1>
    <div class="row">
        <div class="col-sm-6 col-sx-12"></div>
        <div class="col-sm-6 col-sx-12"></div>
        <p>
        <strong>Codigo Interno: {{$product->id}} </strong>
        </p>
        <p>
        <strong>Codigo Proveedor: {{$product->prov_item_id}} </strong>
        </p>
        <!-- <p>
        @include("articulos_movimientos.form",["product" => $product])
        </p> -->
    </div>
</div>
</div>

@endsection