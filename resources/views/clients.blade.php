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
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createClient">NUEVO</button>
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">CURP</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Edad</th>
                    @if (Auth::check() && Auth::user()->rol === 'admin')
                    <th scope="col">Ejecutivo</th>
                    @endif
                    <th scope="col">Estatus</th>
                    <th scope="col">Edición</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $clients as $client )
                    <tr>
                      <td>{{$client->id}}</td>
                      <td>{{$client->name}} {{$client->lastName}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->phone}}</td>
                      <td>{{$client->curp}}</td>
                      <td>{{$client->address}}</td>
                      <td>{{$client->age}}</td>
                      @if (Auth::check() && Auth::user()->rol === 'admin')
                      <td>{{$client->executive->name}}</td>
                    @endif
                      <td>{{$client->status}}</td>
                      <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clientUpdate">Editar</button>
                      </td>
                    </tr>
                    @include('modals.updateClient')
                @endforeach
                </tbody>
              </table>
           </div>
        </div>
    </div>
</div>
@include('modals.newClient')
@endsection

