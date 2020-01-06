<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kumiren2member extends Model
{
    public function Kumiren(){
        return $this->belongTo(Kumiren::class);
    }
}
