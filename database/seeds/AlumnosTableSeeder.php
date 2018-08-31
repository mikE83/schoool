<?php

use Illuminate\Database\Seeder;
use \App\Student;
class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $student = new Student;
		
			$student->create([
				'nombre' => 'John',
				'ap_paterno' => 'Dow',
				'ap_materno' => 'Down',
				'activo' => 1,
				
			]);

			$student->create([
				'nombre' => 'mike',
				'ap_paterno' => 'vazquez',
				'ap_materno' => 'villarreal',
				'activo' => 1,
				
			]);

			$student->create([
				'nombre' => 'juan',
				'ap_paterno' => 'perez',
				'ap_materno' => 'lopez',
				'activo' => 1,
				
			]);
    }
}
