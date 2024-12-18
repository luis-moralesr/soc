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
                <a href="{{ asset('home') }}">Regresar</a>
            </div>
        </div>
        <div class="row w-100 mb2">
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createExecutive">NUEVO</button>
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
                                    <th scope="col">Compañia</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Edición</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                    @foreach ( $executives as $executive )
                                        <tr>
                                          <td>{{$executive->id}}</td>
                                          <td>{{$executive->name}} {{$executive->lastName}}</td>
                                          <td>{{$executive->email}}</td>
                                          <td>{{$executive->phone}}</td>
                                          <td>{{$executive->company}}</td>
                                          <td>{{$executive->state}}</td>
                                          <td>{{$executive->status}}</td>
                                          <td>
                                            <button class="btn btn-primary">Editar</button>
                                          </td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    @include('modals.newExecutive')
@endsection
