<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kumiren extends Model
{
    public function kumiren2members(){
        return $this->hasMany(Kumiren2member::class)->orderBy('id',"asc");
    }
}
