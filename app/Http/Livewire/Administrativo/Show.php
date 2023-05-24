<?php

namespace App\Http\Livewire\Administrativo;

use App\Models\Empleado;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        $administrativos = Empleado::all()
            ->where('tipo_empleado', 'A'); 

        return view('livewire.administrativo.show', compact('administrativos'));
    }
}
