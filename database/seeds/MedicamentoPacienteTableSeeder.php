<?php

use Illuminate\Database\Seeder;

class MedicamentoPacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$paciente = App\Paciente::find(5);
        //$paciente->medicamentos()->attach([1,3,5]);
        $paciente = App\Paciente::find(7);
        //$paciente->medicamentos()->sync([1,3,5]);
        $paciente->medicamentos()->sync([2,4]);
    }
}
