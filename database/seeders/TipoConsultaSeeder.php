<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoConsulta::create(['nombre' => 'Consulta + Ecocardiograma']);
        \App\Models\TipoConsulta::create(['nombre' => 'Consulta + Holter De Ritmo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Consulta + Holter De Ritmo + Ecocardiograma']);
        \App\Models\TipoConsulta::create(['nombre' => 'Consulta + Mapa']);
        \App\Models\TipoConsulta::create(['nombre' => 'Consulta + Mapa + Holter + Ecocardiograma']);
        \App\Models\TipoConsulta::create(['nombre' => 'Consulta + Prueba De Esfuerzo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Ecocardiogra + Holter']);
        \App\Models\TipoConsulta::create(['nombre' => 'Ecocardiograma']);
        \App\Models\TipoConsulta::create(['nombre' => 'Ecocardiograma + Mapa']);
        \App\Models\TipoConsulta::create(['nombre' => 'Ecocardiograma + Prueba De Esfuerzo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Eco Doppler Arterial Mi']);
        \App\Models\TipoConsulta::create(['nombre' => 'Eco Doppler Arterial Ms']);
        \App\Models\TipoConsulta::create(['nombre' => 'Eco Doppler Arterial/Venoso']);
        \App\Models\TipoConsulta::create(['nombre' => 'Eco Doppler Carotideo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Eco Doppler Venoso Mi']);
        \App\Models\TipoConsulta::create(['nombre' => 'Eco Doppler Venoso Ms']);
        \App\Models\TipoConsulta::create(['nombre' => 'Ecvpo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Electrocardiograma']);
        \App\Models\TipoConsulta::create(['nombre' => 'Holter De Ritmo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Holter De Ritmo + Prueba De Esfuerzo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Holter + Prueba De Esfuerzo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Mapa']);
        \App\Models\TipoConsulta::create(['nombre' => 'Mapa + Holter']);
        \App\Models\TipoConsulta::create(['nombre' => 'Mapa + Holter + Ecocardiograma']);
        \App\Models\TipoConsulta::create(['nombre' => 'Preoperatorio']);
        \App\Models\TipoConsulta::create(['nombre' => 'Primera Consulta']);
        \App\Models\TipoConsulta::create(['nombre' => 'Prueba De Esfuerzo']);
        \App\Models\TipoConsulta::create(['nombre' => 'Retiro De Equipos Médicos']);
    }
}
