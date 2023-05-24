<?php

use Livewire\Livewire;
use App\Http\Controllers\DashboardController;
use App\Models\Empleado;
use App\Models\Administrativo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/administrativos', 'administrativos')->name('dashboard.administrativos');
    Route::get('/entrenadores', 'entrenadores')->name('dashboard.entrenadores');
    Route::get('/disciplinas', 'disciplinas')->name('dashboard.disciplinas');
    Route::get('/secciones', 'secciones')->name('dashboard.secciones');
});

Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        return "Error al conectar a la base de datos: " . $e->getMessage();
    }
});
Route::get('/test-query', function () {
    try {
        // $results = Empleado::all();
        // $results = DB::table('empleado')->get();
        // $empleados = Empleado::whereHas('administrativos', function ($query) {
        //     $query->whereIn('cargo', ['administrador', 'recepcionista']);
        // })->get();

        $empleado = Empleado::find('2200000001');
        $administrativo = $empleado->administrativos()->whereIn('cargo', ['administrador', 'recepcionista'])->first();

        if ($administrativo) {
            $cargo = $administrativo->cargo;
            // Realiza alguna operación o muestra el cargo en la vista
        } else {
            // El empleado no tiene un cargo de administrativo
        }

        return $administrativo;
    } catch (\Exception $e) {
        return "Error al consultar la base de datos: " . $e->getMessage();
    }
});
