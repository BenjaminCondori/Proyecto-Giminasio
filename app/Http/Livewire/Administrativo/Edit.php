<?php

namespace App\Http\Livewire\Administrativo;

use App\Models\Empleado;
use Livewire\Component;

class Edit extends Component
{
    public $administrativo;

    public function mount(Empleado $empleado) {
        $this->administrativo = $empleado;
    }

    public function render()
    {
        return view('livewire.administrativo.edit');
    }
}
