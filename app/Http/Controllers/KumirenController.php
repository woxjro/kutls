<?php

namespace App\Http\Controllers;

use App\Member;
use App\Kumiren;
use App\Kumiren2member;
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

    public function select_staffs($kumiren_id){
        $kumiren = Kumiren::where('id',$kumiren_id)->first();
        $kumiren2members = Kumiren2member::where('kumiren_id',$kumiren_id)->get();

        $now_year  = date("Y");
        $now_month = date("n");
        $fiscal_year = $now_year;
        if ($now_month<4) {
            $fiscal_year = $now_year - 1;
        }

        $kumiren_members = collect([]);
        foreach ($kumiren2members as $kumiren2member) {
            $member = Member::where('id',$kumiren2member->member_id)->first();
            $kumiren_members->push($member);
        }


        return view('kumiren_select_staffs')->with([
            "kumiren" => $kumiren,
            "kumiren_members" => $kumiren_members,
            "fiscal_year" => $fiscal_year,
        ]);
    }






}
