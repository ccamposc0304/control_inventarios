@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario logueado: {{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Menú Principal') }}

                    <div class="card-body">
       
                               
                    <div class="form-group text-left">
            <a href="{{url('/products')}}"> Mantenimiento de artículos</a>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
