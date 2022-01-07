<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Electrocardiograma extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'historia_clinica_id', 'ritmo', 'fc', 'pr', 'qrs', 'qt', 
        'qtc', 'aqrs', 'trazo', 'rx_torax_pa', 'ecocardiograma',
    ];
}
