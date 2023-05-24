<x-layouts.content title="Secciones" subtitle="Lista de Secciones" name="Lista de Secciones">

    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="mb-2 d-flex justify-content-end justify-content-md-between">
                    <form class="app-search d-none d-md-block">
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
                        Nueva Sección
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Capacidad</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">1</th>
                                <td class="align-middle">Zona de cardio</td>
                                <td class="align-middle text-wrap">Zona de cardio, equipada con cintas de correr, elípticas, bicicletas estáticas</td>
                                <td>20</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">2</th>
                                <td class="align-middle">Sala de spinning</td>
                                <td class="align-middle text-wrap">Sala de spinning, equipada con bicicletas especiales para este tipo de entrenamiento, con iluminación y sonido especial</td>
                                <td>20</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">3</th>
                                <td class="align-middle">Zona de crossfit</td>
                                <td class="align-middle text-wrap">Zona de CrossFit, con barras, discos, kettlebells, cajas pliométricas, cuerdas, y otros equipos </td>
                                <td>20</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">4</th>
                                <td class="align-middle">Sala de zumba</td>
                                <td class="align-middle text-wrap">Sala de Zumba, con una pista de baile, sistema de sonido, iluminación, y otros equipos </td>
                                <td>20</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">5</th>
                                <td class="align-middle">Zona de aparatos</td>
                                <td class="align-middle text-wrap">Zona de aparatos, con equipos de entrenamiento de fuerza y musculación,  como mancuernas, bancos</td>
                                <td>20</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">6</th>
                                <td class="align-middle">Sala de artes marciales</td>
                                <td class="align-middle text-wrap">Sala de artes marciales, equipada con sacos de boxeo, guantes, vendas, y otros equipos</td>
                                <td>20</td>
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