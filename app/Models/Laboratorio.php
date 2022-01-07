<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Laboratorio extends Model
{

    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'historia_clinica_id', 'hb','htco', 'plaquetas', 'cta', 'seg', 'glicemia', 
        'hba1', 'urea', 'creatinina', 'acido_urico', 'colesterol', 'triglicerios', 'ldl_c', 'hdl_c',
        'tgo', 'tgp', 'sodio', 'potasio', 'magnesio', 'calcio', 'fosforo', 'ck_total', 'ck_mb', 'troponina',
        'ldh', 'bnp', 'otros_laboratorios',
    ];
}
