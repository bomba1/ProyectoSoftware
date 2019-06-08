<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{


    public function academicos(){

        return $this->belongsToMany(Academico::class);

   }

    
    public function trabajoTitulacion(){

        return $this->hasMany(TrabajoTitulacion::class);


    }

   
   
}
