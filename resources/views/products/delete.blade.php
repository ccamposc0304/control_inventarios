<!-- aquí comienza un form -->
{!! Form::open(['url' => '/products/'.$product->id, 'method' =>
    'DELETE', 'class' => 'inline-block' ]) !!}

<input type="submit" class="btn text-danger no-transform border border-0" 
onclick="if(confirm('Está seguro de eliminar este artículo?')){
this.form.submit();}
else{ alert('Operacion Cancelada');
}"
value="Eliminar">


 <!-- <a href="#" class="btn btn-danger btn-xs no-padding no-margin" >
    <i class="material-icons position-static">delete_forever</i>
</a> -->
 
<!-- aquí finaliza el from -->
{!! Form::CLose() !!}