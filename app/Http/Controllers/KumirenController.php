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
        $oyagamis = Kumiren::all()->take(-15)->reverse();

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
            $kumiren2member->role = "NONE";
            $kumiren2member->feed1stteam = "NONE";
            $kumiren2member->feed2ndteam = "NONE";
            $kumiren2member->team = "NONE";
            $member = Member::where('id',$kumiren2member->member_id)->first();
            $kumiren_members->push($member);
            $kumiren2member->save();
        }


        return view('kumiren_select_staffs')->with([
            "kumiren" => $kumiren,
            "kumiren_members" => $kumiren_members,
            "fiscal_year" => $fiscal_year,
        ]);
    }
    public function delete_kumiren(Kumiren $kumiren) {
        $kumiren->delete();
        return redirect('/kumiren/oyagami');
    }






}
