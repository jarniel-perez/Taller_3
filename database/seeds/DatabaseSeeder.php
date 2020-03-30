<?php

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
         //$this->call(HospitalTableSeeder::class);
         //$this->call(MedicoTableSeeder::class);
         //$this->call(PacienteTableSeeder::class);
         //$this->call(MedicamentoTableSeeder::class);
         $this->call(MedicamentoPacienteTableSeeder::class);
    }
}
