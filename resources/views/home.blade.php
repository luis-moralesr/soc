@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body d-flex justify-content-around">
                <a href="{{asset('executives')}}" class="btn btn-primary">Ejecutivos</a>
                <a href="{{asset('clients')}}" class="btn btn-primary">Clientes</a>
                <a href="{{asset('requests')}}" class="btn btn-primary">Pedidos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
