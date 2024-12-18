<div class="modal fade" id="createExecutive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ejecutivo de Ventas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('executives.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre(s)">
                                <label for="name">Nombre(s)</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellidos">
                                <label for="lastName">Apellidos</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"  placeholder="name@example.com">
                                <label for="email">Email</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone"  placeholder="5555555555">
                                <label for="phone">Teléfono</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Nombre de Compañia">
                                <label for="company">Compañia</label>
                              </div>
                              <div class="form-floating mb-3">
                                <select class="form-select" id="state" name="state" aria-label="Floating label select example">
                                  <option selected>Seleccione una opción</option>
                                  <option value="Jalisco">Jalisco</option>
                                  <option value="Michoacan">Michoacan</option>
                                  <option value="Yucatán">Yucatán</option>
                                </select>
                                <label for="state">Estado</label>
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
