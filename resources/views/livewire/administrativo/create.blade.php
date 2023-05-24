<div>
    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
        data-target="#con-close-modal">
        <i class="fas fa-plus-circle"></i>&nbsp;
        Nuevo Administrativo
    </button>

    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Crear nuevo administrativo</h4>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nombres</label>
                                <input type="text" class="form-control" id="field-1" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Apellidos</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Email</label>
                                <input type="text" class="form-control" id="field-3" placeholder="johndoe@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Dirección</label>
                                <input type="text" class="form-control" id="field-3" placeholder="Av. Busch">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="example-number">Cédula de identidad</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="1234567">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="example-number2">Número telefónico</label>
                                <input class="form-control" id="example-number2" type="number" name="number"
                                    placeholder="12345678">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="example-date">Fecha de nacimiento</label>
                                <input class="form-control" id="example-date" type="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label>Seleccionar imagen</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Elija una foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="example-select">Cargo</label>
                                <select class="form-control" id="example-select">
                                    <option>Administrador</option>
                                    <option>Recepcionista</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="example-select">Turno</label>
                                <select class="form-control" id="example-select">
                                    <option>Mañana</option>
                                    <option>Tarde</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label>Sexo</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Femenino</label>
                                </div>
                                <div class="custom-control custom-radio mt-1">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Masculino</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Guardar</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->

</div>
