<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('contenido-dashboard.dashboard'); 
    }

    public function administrativos() {
        return view('contenido-dashboard.administrativos');
    }

    public function entrenadores() {
        return view('contenido-dashboard.entrenadores');
    }

    public function disciplinas() {
        return view('contenido-dashboard.disciplinas');
    }

    public function secciones() {
        return view('contenido-dashboard.secciones');
    }
}
