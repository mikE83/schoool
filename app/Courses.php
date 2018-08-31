<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
        //tabla
    protected $table='t_materias';
    // llave primaria
    protected $primaryKey = 'id_t_materias';
	
    //scopes
	public function scopeSearchCourse($query, $course)
	  {
				return $query->where('nombre', $course)->get();	
 	  }	
  
   public function getid_t_materias(){
   	return $this->id_t_materias;
   }

   //relaciones
   public function tests()
    {
       return $this->hasMany('App\Califications', 'id_t_materias');
    }
}
