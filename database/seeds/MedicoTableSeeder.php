<?php

use Illuminate\Database\Seeder;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $hospital = App\Hospital::find(3);

    $hospital->medicos()->createMany([
    ['nombre' => 'Rocío', 'apellido' => 'Contreras', 'edad' => '29', 'sexo' => 'femenino', 'telefono' => '555666', 'email' => 'roci@gmail.com'],
    ['nombre' => 'Natalia', 'apellido' => 'Morales', 'edad' => '33', 'sexo' => 'femenino', 'telefono' => '876566', 'email' => 'nati@gmail.com'],
    ['nombre' => 'Estefano', 'apellido' => 'Carmona', 'edad' => '22', 'sexo' => 'masculino', 'telefono' => '445566', 'email' => 'paco@gmail.com'],
        ]);
    }
}
