@extends("layouts.app");

@section("content")
<div class="container blue">
<h1>Editar producto</h1>
@include('products.form',['product' => $product, 'url' => '/
products/'.$product->id,'method' => 'PUT'])
</div>
@endsection