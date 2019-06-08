<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model{


    public function trabajoTitulacions (){

         return $this->hasMany(TrabajoTitulacion::class);

    }

}
