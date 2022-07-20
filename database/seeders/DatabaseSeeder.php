<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Ejercicio;
use App\Models\Estadisticas;
use Illuminate\Support\Facades\Hash;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                'id' => 1,
                'name' => 'Eluney',
                'email' => 'eluneyjsalvaro@gmail.com',
                'password' => Hash::make('eluneysalvaro1')
            ]);

            //Hombro
            Ejercicio::create([
                'nombre' => 'Press Militar c/Barra',
                'musculo_trabajado' => 'Hombro'
            ]);
            Ejercicio::create([
                'nombre' => 'Press Militar c/Mancuerna',
                'musculo_trabajado' => 'Hombro'
            ]);
            Ejercicio::create([
                'nombre' => 'Vuelos Laterales',
                'musculo_trabajado' => 'Hombro'
            ]);
            Ejercicio::create([
                'nombre' => 'Vuelos Frontales',
                'musculo_trabajado' => 'Hombro'
            ]);
            Ejercicio::create([
                'nombre' => 'Deltoides Posterior c/Maquina',
                'musculo_trabajado' => 'Hombro'
            ]);
            Ejercicio::create([
                'nombre' => 'Vuelos en Banca Inclinada c/Mancuerna',
                'musculo_trabajado' => 'Hombro'
            ]);

            //Tricep
            Ejercicio::create([
                'nombre' => 'Patada de Tricep c/Mancuerna',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Extension c/Barra Romana Acostado',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Copa Tras Nuca',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Extension de Brazo c/Polea Mano/Abajo',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Extension de Brazo c/Polea Mano/Arriba',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Extension de Brazo c/Polea Arriba',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Extension de Brazo c/Polea Abajo',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Fondos',
                'musculo_trabajado' => 'Tricep'
            ]);
            Ejercicio::create([
                'nombre' => 'Extension de Brazos c/Soga',
                'musculo_trabajado' => 'Tricep'
            ]);
           
    }
}
