<?php

namespace App\Http\Livewire\Entrenador;

use App\Models\Empleado;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        $entrenadores = Empleado::all()
            ->where('tipo_empleado', 'E'); 

        return view('livewire.entrenador.show', compact('entrenadores'));
    }
}
