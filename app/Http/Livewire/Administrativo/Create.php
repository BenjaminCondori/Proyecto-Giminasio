<?php

namespace App\Http\Livewire\Administrativo;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $id, $ci, $nombre, $apellido, $email, $direccion, $telefono, $fecha_nacimiento, $cargo, $turno, $imagen, $sexo, $id_usuario;

    protected $rules = [
        'ci' => 'required|max:10',
        'nombre' => 'required|max:50',
        'apellido' => 'required|max:50',
        'email' => 'required|max:100',
        'direccion' => 'required|max:80',
        'telefono' => 'required|max:10',
        'turno' => 'required|max:10',
        'cargo' => 'required|max:30',
        'imagen' => 'required|image|max:2048'
    ];

    public function generarID()
    {
        $ultimoID = Empleado::max('id');
        $id = $ultimoID ? $ultimoID + 1 : 2000000000;

        return str_pad($id, 10, '0', STR_PAD_LEFT);
    }

    public function render()
    {
        return view('livewire.administrativo.create');
    }
}
