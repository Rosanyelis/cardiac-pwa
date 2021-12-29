<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AntecedenteSeeder::class);
        $this->call(TipoConsultaSeeder::class);
        $this->call(ReferidoSeeder::class);
        $this->call(TipoConsultaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
