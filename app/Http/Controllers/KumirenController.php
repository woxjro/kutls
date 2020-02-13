<?php

namespace App\Http\Controllers;

use App\Kumiren;
use Illuminate\Http\Request;

class KumirenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        return view('kumiren_oyagami');
    }






}
