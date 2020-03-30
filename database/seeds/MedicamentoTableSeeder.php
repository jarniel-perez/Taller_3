<?php

use Illuminate\Database\Seeder;

class MedicamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Medicamento::class, 5)->create();
    }
}
