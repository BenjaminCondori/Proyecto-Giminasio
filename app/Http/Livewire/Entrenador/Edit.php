<?php

namespace App\Http\Livewire\Entrenador;

use App\Models\Empleado;
use Livewire\Component;

class Edit extends Component
{
    public $entrenador;

    public function mount(Empleado $empleado) {
        $this->entrenador = $empleado;
    }

    public function render()
    {
        return view('livewire.entrenador.edit');
    }

}
