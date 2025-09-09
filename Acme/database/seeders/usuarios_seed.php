<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usuarios_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
    'Nombre' => 'Juan Carlos',
    'Apellido_Paterno' => 'García',
    'Apellido_Materno' => 'López',
    'email=' => 'juan.garcia@email.com',  // Cambiar aquí
    'email_verified_at' => now(),
    'password' => Hash::make('password123'),
    'rol' => 1,
    'Activo' => true,
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now()
]);

DB::table('users')->insert([
    'Nombre' => 'María Elena',
    'Apellido_Paterno' => 'Martínez',
    'Apellido_Materno' => 'Rodríguez',
    'email=' => 'maria.martinez@email.com', 
    'email_verified_at' => now(),
    'password' => Hash::make('password123'),
    'rol' => 1,
    'Activo' => true,
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now()
]);
DB::table('users')->insert([
            'Nombre' => 'Pedro',
            'Apellido_Paterno' => 'González',
            'Apellido_Materno' => 'Morales',
            'email=' => 'pedro.gonzalez@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'rol' => 0,
            'Activo' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('users')->insert([
            'Nombre' => 'Ana',
            'Apellido_Paterno' => 'Ramírez',
            'Apellido_Materno' => 'Torres',
            'email=' => 'ana.ramirez@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'rol' => 0,
            'Activo' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('users')->insert([
            'Nombre' => 'Roberto',
            'Apellido_Paterno' => 'Hernández',
            'Apellido_Materno' => 'Castillo',
            'email=' => 'roberto.hernandez@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'rol' => 0,
            'Activo' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('users')->insert([
            'Nombre' => 'Laura',
            'Apellido_Paterno' => 'Mendoza',
            'Apellido_Materno' => 'Vázquez',
            'email=' => 'laura.mendoza@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'rol' => 0,
            'Activo' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('users')->insert([
            'Nombre' => 'Carlos',
            'Apellido_Paterno' => 'Jiménez',
            'Apellido_Materno' => 'Ruiz',
            'email=' => 'carlos.jimenez@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'rol' => 0,
            'Activo' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
