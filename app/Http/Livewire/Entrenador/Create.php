<?php

namespace App\Http\Livewire\Entrenador;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $id_empleado, $ci, $nombre, $apellido, $email, $direccion, $telefono, $fecha_nacimiento, $especialidad, $turno, $imagen, $genero;

    protected $rules = [
        'ci' => 'required|max:10',
        'nombre' => 'required|max:50',
        'apellido' => 'required|max:50',
        'email' => 'required|email|max:100',
        'direccion' => 'required|max:80',
        'especialidad' => 'required|max:50',
        'telefono' => 'required|max:10',
        'imagen' => 'required|image|max:2048'
    ];

    public function mount() {
        $this->id_empleado = $this->generarID();
    }

    public function generarID()
    {
        $ultimoID = Empleado::max('id');
        $id = $ultimoID ? $ultimoID + 1 : 2000000000;

        return str_pad($id, 10, '0', STR_PAD_LEFT);
    }

    public function guardar() {
        $this->validate();

        Empleado::create([
            'id' => $this->id_empleado,
            'ci' => $this->ci,
            'nombres' => $this->nombre,
            'apellidos' => $this->apellido,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'genero' => $this->genero,
            'turno' => $this->turno,
            'tipo_empleado' => 'E',
            'id_usuario' => '12'
        ]);

    }

    public function render()
    {
        return view('livewire.entrenador.create');
    }
}
