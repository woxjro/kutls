<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function Kumiren2members(){
        return $this->belongsTo(Kumiren2member::class);
    }
}
