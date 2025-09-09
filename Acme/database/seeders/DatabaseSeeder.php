<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run(): void
    {
        $this->call(usuarios_seed::class);
        $this->call(arquitectos_seed::class);
        $this->call(Ubicacion_seed::class);
        $this->call(proyectos_seed::class);
        $this->call(planos_seed::class);




    }
}
