<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoTitulacion extends Model
{
    
    public function estudiantes(){

        return $this->belongsToMany(Estudiante::class);

    }

    public function academicos(){

        return $this->belongsToMany(Academico::class);


    }

    public function tipoActividad() {

        return $this->belongsTo(TipoActividad::class) ;
    
    }

    public function comision() {

        return $this->belongsTo(TipoActividad::class) ;
    
    }


}
