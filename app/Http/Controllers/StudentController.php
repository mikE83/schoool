<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Courses;
use App\Califications;
use App\User;
use Validator;


class StudentController extends Controller
{
    //
    protected $course;
    protected $student;
    protected $calification;
    
    //
	 public function __construct(Student $student, Courses $course, Califications $calification, User $user)
    {
        $this->student= $student;
        $this->user= $user;
      	$this->course= $course;
      	$this->calification= $calification;
    }


    public function destroy($id){
    	$test =  $this->calification->find($id);
    	if($test == null){
    	 $respuesta =array("success" => "false", "msg" => 'Prueba no encontrada o no activo');	

    	}else{

    		$test->delete();
    		$respuesta =array("success" => "ok", "msg" => 'Calificacion eliminada');

    	}

    	return response()->json($respuesta);

    }

    public function show($id){
		$student= $this->student->find($id);
		if($student == null or $student->activo == 0)
		{
		 $respuesta =array("success" => "false", "msg" => 'Estudiante no encontrado o no activo');	
		}else{
			$respuesta =array("success" => "ok", "calificaciones" => $student->calificaciones(), "promedio" => $student->promedio());
		}
        return response()->json($respuesta);

    }


    public function update(Request $request){
    	$fields = $request->all();
		if (count($fields) == 1 ){		
			foreach ($fields as $field => $value) {
				
				$id = (int)str_ireplace("'", '',$field);
				$test =  $this->calification->find($id);
				if($test == null ){
					$respuesta =array("success" => "incorrecto", "msg" => "no existe la prueba  con identificador {$field}");
				}else{
						
										     $validator = Validator::make($request->all(), [
           				 $field => 'required|numeric|min:0|max:10',
            			
        				]);

					  	if ($validator->fails()) {

					  		$respuesta = array("success" => "incorrecto ", "msg" => $validator->errors());
					  	 }else{ 
					  	 
					  	 	$test->calificacion=$value;
					  	 	$test->save();

					  	 $respuesta = array("success" => "correcto", "msg" =>"calificacion actualizada");

					
				}

			}
		}
    }else{

     $respuesta = array("success" => "incorrecto", "msg" =>'solo puedes actualizar una calificacion');	
    }
    return response()->json($respuesta);


 }

    public function addQualification($id, Request $request){
	
	$student= $this->student->find($id);
		if($student == null or $student->activo == 0)
		{
			$respuesta =array("success" => "incorrecto", "msg" => 'no existe el estudiante');
		
		}else{
			$fields = $request->all();
			if (count($fields) == 1 ){
			foreach ($fields as $field => $value) {
				$course =  $this->course->searchCourse(str_ireplace('_', ' ', $field))->first();
				//$course =  $this->course->find(1);				
				if($course == null ){
					$respuesta =array("success" => "incorrecto", "msg" => "no existe el curso {$field}");
				}else{

					  $validator = Validator::make($request->all(), [
           				 $field => 'required|numeric|min:0|max:10',
            			
        				]);

					  	if ($validator->fails()) {

					  		$respuesta = array("success" => "incorrecto ", "msg" => $validator->errors());
					  	 }else{ 
					  	 
					  	 	$this->calification->create([
							'id_t_usuarios' => $student->id_t_usuarios,
							'id_t_materias' => $course->id_t_materias,
						'calificacion' => $value
					]); 


					  	 $respuesta = array("success" => "ok", "msg" =>'calificacion registrada');	
					  	 }	
				     		
				}
				
			}
  		}else{

		 $respuesta = array("success" => "incorrecto", "msg" =>'solo puedes dar de alta una calificacion');	

		}		

		}

			return response()->json($respuesta);
		}
     

 




}
