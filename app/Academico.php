<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model{



    public function comisions(){
        return $this->belogsToMany(Comsion::class);
    }

    public function trabajoTitulacions(){
        return $this->belongsToMany(TrabajoTitulacion::class);
    }
}

     