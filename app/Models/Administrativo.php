<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class administrativo extends Model
{
    use HasFactory;
    protected $table = 'administrativo';

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class, 'id');
    } 

}
