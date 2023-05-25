<div>
    <button type="button" class="btn btn-sm btn-primary ml-1 mr-1" data-toggle="modal" data-target="#modal-edit2">Editar</button>

    <div id="modal-edit2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Editar entrenador</h4>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nombres</label>
                                <input type="text" wire:model="nombre" class="form-control" placeholder="John" required>
                                <div class="alert alert-info d-none fade show">
                                    @error('nombre') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Apellidos</label>
                                <input type="text" wire:model="apellido" class="form-control" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" wire:model="email"
                                    class="form-control"placeholder="johndoe@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Dirección</label>
                                <input type="text" wire:model="direccion" class="form-control"
                                    placeholder="Av. Busch">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Cédula de identidad</label>
                                <input class="form-control" wire:model="ci" type="number" name="number"
                                    placeholder="1234567">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Número telefónico</label>
                                <input class="form-control" wire:model="telefono" type="number" name="number"
                                    placeholder="12345678">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Fecha de nacimiento</label>
                                <input class="form-control" wire:model="fecha_nacimiento" type="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Seleccionar imagen</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" wire:model="imagen" class="custom-file-input">
                                        <label class="custom-file-label">Elija una foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Especialidad</label>
                                    <input type="text" wire:model="especialidad" class="form-control"
                                        placeholder="Entrenador de aparatos">
                                </div>
                            </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Turno</label>
                                <select class="form-control" wire:model="turno">
                                    <option>Mañana</option>
                                    <option>Tarde</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label>Género</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" name="customRadio" class="custom-control-input"
                                        id="customCheck1" wire:model="genero">
                                    <label for="customCheck1" class="custom-control-label">Femenino</label>
                                </div>
                                <div class="custom-control custom-radio mt-1">
                                    <input type="radio" name="customRadio" class="custom-control-input"
                                        id="customCheck2" wire:model="sexo">
                                    <label for="customCheck2" class="custom-control-label">Masculino</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary waves-effect waves-light" wire:click="guardar"
                        wire:loading.attr="disabled" type="button">Guardar</button>
                </div>
            </div>
        </div>
    </div>

</div>


