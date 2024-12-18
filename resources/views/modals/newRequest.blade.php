<div class="modal fade" id="createRequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('requests.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="form-floating mb-3">
                                <select name="client_id" class="form-select" id="client" aria-label="Floating label select example">
                                    <option selected>Seleccione un cliente</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastName }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Clientes</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="state" name="product" aria-label="Floating label select example">
                                  <option selected>Seleccione una Producto</option>
                                  <option value="Agua mineral">Agua mineral</option>
                                  <option value="Sabritas 450gr">Sabritas 450gr</option>
                                  <option value="Yogurt natural">Yogurt natural</option>
                                </select>
                                <label for="state">Producto</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Precio del producto">
                                <label for="price">Precio</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Precio del producto">
                                <label for="amount">Cantidad</label>
                              </div>
                              <div class="form-floating mb-3">
                                <select class="form-select" id="discount" name="discount" aria-label="Floating label select example">
                                  <option selected>Seleccione una Descuento</option>
                                  <option value="3">3%</option>
                                  <option value="10">10%</option>
                                  <option value="20">20%</option>
                                </select>
                                <label for="discount">Producto</label>
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
