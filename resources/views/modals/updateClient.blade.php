<div class="modal fade" id="clientUpdate{{ $client->cli_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('clients.update', $client->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}" placeholder="Nombre(s)">
                                <label for="name">Nombre(s)</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$client->lastName}}" placeholder="Apellidos">
                                <label for="lastName">Apellidos</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"  value="{{$client->email}}"  placeholder="name@example.com">
                                <label for="email">Email</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}"  placeholder="5555555555">
                                <label for="phone">Teléfono</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="curp" name="curp" value="{{$client->curp}}" placeholder="Nombre de Compañia">
                                <label for="curp">CURP</label>
                              </div>
                              <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Dirección del cliente" id="address"  name="address">{{$client->address}}</textarea>
                                <label for="address">Dirección</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="age" name="age" value="{{$client->age}}"  placeholder="Edad del cliente">
                                <label for="age">Edad</label>
                              </div>
                              <div class="form-floating mb-3">
                                <select class="form-control" id="status" name="status">
                                    <option value="active" {{ $client->status == 'active' ? 'selected' : '' }}>Activo</option>
                                    <option value="inactive" {{ $client->status == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                                </select>
                                <label for="status">Estado</label>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
