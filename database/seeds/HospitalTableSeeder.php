<?php

use Illuminate\Database\Seeder;

class HospitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //guardado en tablas 1 a 1
    /*  $hospital = new App\Hospital;

      $hospital->nombre ='Hospital Regional';
      $hospital->ciudad ='Sincelejo';
      $hospital->direccion ='CRA. 23 #4';
      $hospital->telefono ='123456789';
      $hospital->email ='HR@gmail.com';

      $hospital->save();

      $director = new App\Director;
      $director->nombre ='Juan David';
      $director->apellido ='Martinez';
      $director->edad ='40';
      $director->telefono ='987654321';
      $director->email ='juanda@gmail.com';

      $hospital->director()->save($director);*/

        //guardado en tablas 1 a n
        $hospital = new App\Hospital;

        $hospital->nombre ='Hospital prenatal';
        $hospital->ciudad ='Sincelejo';
        $hospital->direccion ='CRA 123 # 43e';
        $hospital->telefono ='111111';
        $hospital->email ='HP@gmail.com';

        $hospital->save();

        $medico = new App\Medico;

        $medico->nombre ='Andres';
        $medico->apellido ='florez';
        $medico->edad ='23';
        $medico->sexo ='masculino';
        $medico->telefono ='11223344';
        $medico->email ='andresf@gmail.com';

        $medico2 = new App\Medico;

        $medico2->nombre ='Lorena';
        $medico2->apellido ='Jimenez';
        $medico2->edad ='33';
        $medico2->sexo ='femenino';
        $medico2->telefono ='99887766';
        $medico2->email ='lorejim@gmail.com';

        $hospital->medicos()->saveMany([$medico, $medico2]);
    }
}
