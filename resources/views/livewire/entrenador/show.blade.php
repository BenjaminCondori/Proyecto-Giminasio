<div>

    <div class="mb-2 d-flex justify-content-between">
        <form class="app-search">
            <div class="app-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <div class="input-group-append">
                        <button class="btn text-secondary" type="">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        @livewire('entrenador.create')
    </div>

    <div class="table-responsive">
        <table class="table table-bordered mb-0">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>CI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Especialidad</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entrenadores as $entrenador)
                <tr class="text-nowrap">
                    <th scope="row" class="align-middle">{{ $entrenador->id }}</th>
                    <td class="align-middle">{{ $entrenador->ci }}</td>
                    <td class="align-middle">{{ $entrenador->nombres }}</td>
                    <td class="align-middle">{{ $entrenador->apellidos }}</td>
                    <td class="align-middle">{{ $entrenador->email }}</td>
                    <td class="align-middle">{{ 
                    $entrenador->entrenadores()->value('especialidad');
                    }}</td>
                    <td class="align-middle d-flex">
                        <button class="btn btn-sm btn-warning">Ver</button>
                        @livewire('entrenador.edit', ['entrenador' => $entrenador], key($entrenador->id))
                        <button type="button" class="btn btn-sm btn-danger" onclick="mostrarAlertaConfirmacion()">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

