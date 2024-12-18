@extends('layouts.app')

@section('content')
<div class="container bg-white">
    <div class="row mb-2">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{asset('home')}}">Regresar</a>
        </div>
    </div>
    <div class="row w-100 mb2">
        <div class="col d-flex justify-content-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createRequest">NUEVO</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
           <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    @if (Auth::check() && Auth::user()->rol === 'admin')
                    <th scope="col">Ejecutivo</th>
                    @endif
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Total</th>
                    <th scope="col">Estatus</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $requests as $request )
                    <tr>
                      <td>{{$request->client->name}}</td>
                      @if (Auth::check() && Auth::user()->rol === 'admin')
                      <td>{{$request->executive->name}}</td>
                    @endif
                      <td>{{$request->executive->name}}</td>
                      <td>{{$request->product}}</td>
                      <td>{{$request->price}}</td>
                      <td>{{$request->amount}}</td>
                      <td>{{$request->total}}</td>
                      <td>{{$request->status}}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
           </div>
        </div>
    </div>
</div>
@include('modals.newRequest')
@endsection
