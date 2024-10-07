<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear un usuario administrador (gerente)
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('Server01'), // Hasheando la contraseña
            'role' => 'gerente',
        ]);

        // Crear un usuario trabajador
        User::factory()->create([
            'name' => 'Trabajador',
            'email' => 'trabajador@example.com',
            'password' => bcrypt('Worker01'), // Hasheando la contraseña
            'role' => 'trabajador',
        ]);

        // Crear un usuario normal
        User::factory()->create([
            'name' => 'Usuario',
            'email' => 'usuario@example.com',
            'password' => bcrypt('User01'), // Hasheando la contraseña
            'role' => 'usuario',
        ]);
    }
}
