<?php

use Illuminate\Database\Seeder;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Paciente::class, 5)->create();
    }
}
