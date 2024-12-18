<div class="modal fade" id="requestUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('requests.update', $request->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="form-floating mb-3">
                                <select name="client_id" class="form-select" id="client" aria-label="Floating label select example">
                                    <option disabled>Seleccione un cliente</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}" {{ $request->client_id == $client->id ? 'selected' : '' }}>
                                            {{ $client->name }} {{ $client->lastName }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="client">Clientes</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="product" name="product" aria-label="Floating label select example">
                                    <option disabled>Seleccione un Producto</option>
                                    <option value="Agua mineral" {{ $request->product == 'Agua mineral' ? 'selected' : '' }}>Agua mineral</option>
                                    <option value="Sabritas 450gr" {{ $request->product == 'Sabritas 450gr' ? 'selected' : '' }}>Sabritas 450gr</option>
                                    <option value="Yogurt natural" {{ $request->product == 'Yogurt natural' ? 'selected' : '' }}>Yogurt natural</option>
                                </select>
                                <label for="product">Producto</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="price" name="price"
                                       value="{{ $request->price }}" placeholder="Precio del producto">
                                <label for="price">Precio</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="amount" name="amount"
                                       value="{{ $request->amount }}" placeholder="Cantidad del producto">
                                <label for="amount">Cantidad</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="discount" name="discount" aria-label="Floating label select example">
                                    <option disabled>Seleccione un Descuento</option>
                                    <option value="3" {{ $request->discount == 3 ? 'selected' : '' }}>3%</option>
                                    <option value="10" {{ $request->discount == 10 ? 'selected' : '' }}>10%</option>
                                    <option value="20" {{ $request->discount == 20 ? 'selected' : '' }}>20%</option>
                                </select>
                                <label for="discount">Descuento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="status" name="status">
                                    <option value="active" {{ $request->status == 'active' ? 'selected' : '' }}>Activo</option>
                                    <option value="inactive" {{ $request->status == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                                </select>
                                <label for="status">Estado</label>
                            </div>
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
