<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Referidos::create(['nombre' => 'Propio']);
        \App\Models\Referidos::create(['nombre' => 'Academia Militar']);
        \App\Models\Referidos::create(['nombre' => 'Alcaldía De Mariño']);
        \App\Models\Referidos::create(['nombre' => 'Amb. El Rincón']);
        \App\Models\Referidos::create(['nombre' => 'Cacao San Jose']);
        \App\Models\Referidos::create(['nombre' => 'Cáritas']);
        \App\Models\Referidos::create(['nombre' => 'Cdi Aníbal Lezama (Tunapuy)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Angela Rodriguez (Neumonólogo)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Carmen Torres (Internista)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Agustín Prada (Cardiólogo)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Inginea Fuentes (Neurólogo)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Ligia González (Pediatra)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Samira Salahadine. (Internista)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Ybetty Rodríguez (Internista)']);
        \App\Models\Referidos::create(['nombre' => 'Dra. Zareida Botini (Oncólogo)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Jose Rodriguez Montalvo (Trauma)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Luis Arguello (Pediatra)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Luis Marín (Cardiólogo)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Miguel Basso (Traumatólogo)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. René Villarroel']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Roberto García (Internista)']);
        \App\Models\Referidos::create(['nombre' => 'Dr. Wilman Guevara (Cirujáno)']);
        \App\Models\Referidos::create(['nombre' => 'Fundación Juana Paula Pino']);
        \App\Models\Referidos::create(['nombre' => 'Hospital Del Pilar']);
        \App\Models\Referidos::create(['nombre' => 'Hospital Güiria']);
        \App\Models\Referidos::create(['nombre' => 'Hospital Río Caribe']);
        \App\Models\Referidos::create(['nombre' => 'Hosp. Yaguaraparo']);
        \App\Models\Referidos::create(['nombre' => 'Hsad']);
        \App\Models\Referidos::create(['nombre' => 'Juan Carlos Luggi (Urólogo)']);
    }
}
