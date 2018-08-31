<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //tabla
    protected $table='t_alumnos';
    // llave primaria
    protected $primaryKey = 'id_t_usuarios';


    public function calificaciones(){
    	$resp = array();
    	$counter=0;
    	if ($this->tests->count() > 0){
    		foreach ($this->tests as $test) {
    			$resp[$counter]= array(
    			'id_t_usuario' => $test->id_t_usuario,
    			'nombre'=> $this->nombre,
    			'apellido_paterno'=>$this->ap_paterno,
    			'apellido_materno'=>$this->ap_materno,
    			'materia'=>$test->course->nombre,
    			'calificacion'=>$test->calificacion,
    			'fecha_registro'=>date("d/m/Y", strtotime($test->created_at))  //date('dd/mm/yyy 
    		);
    		$counter++;
    		}
    	}else{
    		$resp = array('mensaje' => 'no tiene calificaciones registradas');
    	 }
    	 return $resp; 
    }



    public function promedio(){

    	if ($this->tests->count() > 0){
    		$total=0;
    		foreach ($this->tests as $test) {
    		 $total+=$test->calificacion;	
    		}
    		 $resp = array('promedio' => $total/($this->tests->count()));
    		 }else{
    		$resp = array('mensaje' => 'no tiene calificaciones registradas');
    	 }

    	return $resp; 

    }



     public function tests()
    {
       return $this->hasMany('App\Califications', 'id_t_usuarios');
    }
   
}
