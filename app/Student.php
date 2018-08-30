<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //tabla
    protected $table='t_alumnos';
    // llave primaria
    protected $primaryKey = 'id_t_materias';

}
