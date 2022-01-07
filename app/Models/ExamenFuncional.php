<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class ExamenFuncional extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'historia_clinica_id', 'disnea','angina', 'palpitaciones', 'edema', 'presincope', 
        'sincope', 'vertigos', 'otros_funcionales',
    ];
}
