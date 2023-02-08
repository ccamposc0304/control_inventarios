@extends("layouts.app");

@section("content")
<div class="big-padding text-center blue-grey white-text">
    <h1>Mantenimiento de artículos</h1>
</div>

<div class="floating"></div>
<!-- <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab"> -->
<a href="{{url('/products/create')}}" class="btn btn-success btn-fab display">
    <i class="material-icons position-static">add_box</i>
</a>

<div class="form-group text-end">
            <a href="{{url('/home')}}"> Volver al menú principal</a>
    </div>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Id</td>
                <td>Prov_item_id</td>
                <td>Articulo_Nombre</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Acciones</td>
                
            
                
                
            </tr>
</thead>
<tbody>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->prov_item_id }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->pricing }}</td>
        <td>{{ $product->quantity }}</td>
        <td>
        <a href="{{url('/products/'.$product->id.'/edit')}}">
                    EDITAR
                </a>

                @include('products.delete',['product' => $product])
        </td>
                        
    </tr>
    @endforeach
</tbody>
</table>
</div>


</div>


@endsection