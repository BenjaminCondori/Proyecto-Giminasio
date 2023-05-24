<x-layouts.content title="Disciplinas" subtitle="Lista de Disciplinas" name="Lista de Disciplinas">

    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="mb-2 d-flex justify-content-between">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <div class="input-group-append">
                                    <button class="btn text-secondary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>&nbsp;
                        Nueva Disciplina
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">1</th>
                                <td class="align-middle">Cardio</td>
                                <td class="align-middle">Ejercicio cardiovascular que aumenta el ritmo cardíaco y quema calorías.</td>
                                <td class="align-middle">180</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">2</th>
                                <td class="align-middle">Spinning</td>
                                <td class="align-middle">Clase de ciclismo indoor que se enfoca en la resistencia y el ritmo cardíaco.</td>
                                <td class="align-middle">180</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">3</th>
                                <td class="align-middle">Crossfit</td>
                                <td class="align-middle">Entrenamiento funcional de alta intensidad que combina diferentes ejercicios.</td>
                                <td class="align-middle">200</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">4</th>
                                <td class="align-middle">Zumba</td>
                                <td class="align-middle">Clase de baile que combina movimientos aeróbicos con música latina.</td>
                                <td class="align-middle">200</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">5</th>
                                <td class="align-middle">Aparatos</td>
                                <td class="align-middle">Entrenamiento de fuerza y resistencia utilizando máquinas de gimnasio.</td>
                                <td class="align-middle">200</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div> <!-- end card-box -->
        </div> <!-- end col -->

    </div>

</x-layouts.content>