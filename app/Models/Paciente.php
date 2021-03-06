<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Paciente extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'f_ingreso', 'cedula', 'nombres', 'f_nacimiento', 'edad', 'telefono', 'profesion', 'direccion',
    ];
}
