<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AntecedenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Antecedente::create(['nombre' => 'Ninguno']);
        \App\Models\Antecedente::create(['nombre' => 'Bav 2Do Grado Tipo 1']);
        \App\Models\Antecedente::create(['nombre' => 'Bav 2Do Grado Tipo 2']);
        \App\Models\Antecedente::create(['nombre' => 'Bav Completo']);
        \App\Models\Antecedente::create(['nombre' => 'Bav De 1Er Grado']);
        \App\Models\Antecedente::create(['nombre' => 'Cardiopatía Congénita']);
        \App\Models\Antecedente::create(['nombre' => 'Covid-19']);
        \App\Models\Antecedente::create(['nombre' => 'Diabetes Tipo 1']);
        \App\Models\Antecedente::create(['nombre' => 'Diabetes Tipo 2']);
        \App\Models\Antecedente::create(['nombre' => 'Dislipidemia Mixta']);
        \App\Models\Antecedente::create(['nombre' => 'Farva']);
        \App\Models\Antecedente::create(['nombre' => 'Farvr']);
        \App\Models\Antecedente::create(['nombre' => 'Farvr Paroxistica']);
        \App\Models\Antecedente::create(['nombre' => 'Higado Graso']);
        \App\Models\Antecedente::create(['nombre' => 'Hipercolesterolemia']);
        \App\Models\Antecedente::create(['nombre' => 'Hipertiroidismo']);
        \App\Models\Antecedente::create(['nombre' => 'Hipertrigliceridemia']);
        \App\Models\Antecedente::create(['nombre' => 'Hipotiroidismo']);
        \App\Models\Antecedente::create(['nombre' => 'Hta']);
        \App\Models\Antecedente::create(['nombre' => 'Ic Con Fevi Levemente Deprimida']);
        \App\Models\Antecedente::create(['nombre' => 'Ic Con Fevi Severamente Deprimida']);
        \App\Models\Antecedente::create(['nombre' => 'Ic Fevi Preservada']);
        \App\Models\Antecedente::create(['nombre' => 'Imcest']);
        \App\Models\Antecedente::create(['nombre' => 'Ms Abortada']);
        \App\Models\Antecedente::create(['nombre' => 'Obesidad Grado 1']);
        \App\Models\Antecedente::create(['nombre' => 'Obesidad Grado 2']);
        \App\Models\Antecedente::create(['nombre' => 'Resistencia A La Insulina']);
    }
}
