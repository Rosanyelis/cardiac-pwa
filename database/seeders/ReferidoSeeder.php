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
        \App\Models\Referido::create(['nombre' => 'Propio']);
        \App\Models\Referido::create(['nombre' => 'Academia Militar']);
        \App\Models\Referido::create(['nombre' => 'Alcaldía De Mariño']);
        \App\Models\Referido::create(['nombre' => 'Amb. El Rincón']);
        \App\Models\Referido::create(['nombre' => 'Cacao San Jose']);
        \App\Models\Referido::create(['nombre' => 'Cáritas']);
        \App\Models\Referido::create(['nombre' => 'Cdi Aníbal Lezama (Tunapuy)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Angela Rodriguez (Neumonólogo)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Carmen Torres (Internista)']);
        \App\Models\Referido::create(['nombre' => 'Dr. Agustín Prada (Cardiólogo)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Inginea Fuentes (Neurólogo)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Ligia González (Pediatra)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Samira Salahadine. (Internista)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Ybetty Rodríguez (Internista)']);
        \App\Models\Referido::create(['nombre' => 'Dra. Zareida Botini (Oncólogo)']);
        \App\Models\Referido::create(['nombre' => 'Dr. Jose Rodriguez Montalvo (Trauma)']);
        \App\Models\Referido::create(['nombre' => 'Dr. Luis Arguello (Pediatra)']);
        \App\Models\Referido::create(['nombre' => 'Dr. Luis Marín (Cardiólogo)']);
        \App\Models\Referido::create(['nombre' => 'Dr. Miguel Basso (Traumatólogo)']);
        \App\Models\Referido::create(['nombre' => 'Dr. René Villarroel']);
        \App\Models\Referido::create(['nombre' => 'Dr. Roberto García (Internista)']);
        \App\Models\Referido::create(['nombre' => 'Dr. Wilman Guevara (Cirujáno)']);
        \App\Models\Referido::create(['nombre' => 'Fundación Juana Paula Pino']);
        \App\Models\Referido::create(['nombre' => 'Hospital Del Pilar']);
        \App\Models\Referido::create(['nombre' => 'Hospital Güiria']);
        \App\Models\Referido::create(['nombre' => 'Hospital Río Caribe']);
        \App\Models\Referido::create(['nombre' => 'Hosp. Yaguaraparo']);
        \App\Models\Referido::create(['nombre' => 'Hsad']);
        \App\Models\Referido::create(['nombre' => 'Juan Carlos Luggi (Urólogo)']);
    }
}
