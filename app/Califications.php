<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Califications extends Model
{
    //
     protected $table='t_calificaciones';
    // llave primaria
    protected $primaryKey = 'id_t_calificaciones';
     protected $fillable = ['id_t_materias', 'id_t_usuarios', 'calificacion'];


     public function student()
	{
      return $this->belongsTo('App\Student', 'id_t_usuarios');
	}

	  public function course()
	{
      return $this->belongsTo('App\Courses', 'id_t_materias');
	}
}
