<?php

use Illuminate\Database\Seeder;
use \App\Courses;
class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                $course = new Courses;
		
			$course->create([
				'nombre' => 'matematicas',
				'activo' => 1
				
			]);

			$course->create([
				'nombre' => 'programacion I',
				'activo' => 1
				
			]);
			$course->create([
				'nombre' => 'ingenieria de sofware',
				'activo' => 1
				
			]);
    }
}
