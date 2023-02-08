<!-- {!!Form::open(['url' => $url, 'method' => $method ]) !!} -->
{!!Form::open(['url' => $url, 'method' => $method ]) !!}

<!-- <div class="form group">
    {{ Form::text('title','',['class' => 'form-control'])}} -->

<div class="container mx-sm-3 my-4">
    

    <div class="form-group">
    {{ Form::text('title',$product->title,['class' => 'form-control',
        'placeholder' =>'Descripcion...']) }}
    </div>
    
    <div class="form-group">
    {{ Form::text('prov_item_id',$product->prov_item_id,['class' => 'form-control',
        'placeholder' =>'Prov Item Id...']) }}
    </div>

    <div class="form-group">
    {{ Form::number('pricing',$product->pricing,['class' => 'form-control',
        'placeholder' =>'Precio...']) }}
    </div>
    
        <div class="form-group text-right">
            <a href="{{url('/products')}}"> Volver al mantenimiento de artículos</a>
    </div>
        <input type="submit" value="Guardar" class="btn btn-success">
    </div>
</div>
    {!!Form::close() !!}