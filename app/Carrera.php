<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{



    public function estudiantes(){

        return $this->belongsToMany(Estudiante::class);
    
    }
    
}

