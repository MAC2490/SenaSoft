<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        $documento_vendedor = 108800;
        $documento_cliente = 109900; 
        for ($i=0; $i < 8; $i++) { 
            \App\Models\DatoCliente::factory()->create([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'documento' => $documento_cliente++,
                'estado' => 'Activo'
            ]);
            \App\Models\DatoVendedor::factory()->create([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'documento' => $documento_vendedor++
            ]);
        }
    }
}
