<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    


    public function trabajoTitulacions(){

        return $this->belongsToMany(TrabajoTitulacion::class);


    }

    public function carreras(){
        return $this->belongsToMany(Carrera::class);
    }

    
}
