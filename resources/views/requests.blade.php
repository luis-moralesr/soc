@extends('layouts.app')

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col">
            <a href="{{asset('home')}}">Regresar</a>
        </div>
    </div>
    <div class="row w-100 mb2">
        <div class="col d-flex justify-content-end">
            <button class="btn btn-primary">NUEVO</button>
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
                    <th scope="col">Ejecutivo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
           </div>
        </div>
    </div>
</div>
@endsection
