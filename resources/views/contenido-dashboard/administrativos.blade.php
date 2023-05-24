<x-layouts.content title="Empleados" subtitle="Administrativos" name="Administrativos">

    <div class="row">
        <div class="col-12">
            <div class="card-box">

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

                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>&nbsp;
                        Nuevo Administrativo
                    </button>
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
                                <th>Cargo</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">2200000001</th>
                                <td class="align-middle">6789012</td>
                                <td class="align-middle">Juan Carlos</td>
                                <td class="align-middle">Jiménez Ramírez</td>
                                <td class="align-middle">jc_jimenez@hotmail.com</td>
                                <td class="align-middle">Administrador</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-warning">Ver</button>
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">2200000002</th>
                                <td class="align-middle">6543210</td>
                                <td class="align-middle">Ana</td>
                                <td class="align-middle">Rodríguez Pérez</td>
                                <td class="align-middle">ana_rodriguez@gmail.com</td>
                                <td class="align-middle">Recepcionista</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-warning">Ver</button>
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="text-nowrap">
                                <th scope="row" class="align-middle">2200000003</th>
                                <td class="align-middle">6892345</td>
                                <td class="align-middle">María José</td>
                                <td class="align-middle">Gutiérrez González</td>
                                <td class="align-middle">mariajose_gutierrez@yahoo.com</td>
                                <td class="align-middle">Recepcionista</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-sm btn-warning">Ver</button>
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