<?php

use Illuminate\Database\Seeder;
use \App\Student;
use \App\Courses;
use \App\Califications;

class loadTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$estudiantes= new Student();
    	$estudiantes=$estudiantes->all();
    	$materias = new Courses();
    	$materias =$materias->all();
    	$calificacion = new Califications();
    	foreach ($estudiantes as $estudiante) {
    		foreach ($materias as $materia) {
    			$calificacion->create([
    				'id_t_usuarios' => $estudiante->id_t_usuarios,
					'id_t_materias' => $materia->id_t_materias,
					'calificacion' => rand(0,10)	
    			]);
    		}	
    	}
        //
    }
}
