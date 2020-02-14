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
        $oyagamis = Kumiren::all()->take(-20)->reverse();

        return view('kumiren_oyagami')->with([
            "oyagamis" => $oyagamis
        ]);
    }






}
