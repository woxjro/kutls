<?php

namespace App\Http\Controllers;


use App\User;
use App\Member;
use App\Kumiren;
use App\Kumiren2member;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showMembers()
    {
        $kumiren = new Kumiren;

        $kumiren->name = uniqid(date("Ymd")."-");
        $kumiren->save();

        $members = Member::all();
        $members = $members->sortBy('enrollment_year');

        $now_year = date("Y");
        $now_month = date("n");
        $fiscal_year = $now_year;
        if ($now_month<4) {
            $fiscal_year = $now_year - 1;
        }
        return view('kumiren_select_members')->with([
            "members" => $members,
            "fiscal_year" => $fiscal_year,
        ]);
    }

    public function showKumirenMembers(Request $request)
    {
        $latest_kumiren = DB::table('kumirens')->latest()->first();
        $latest_kumiren_id = $latest_kumiren->id;



        $allrequest = $request->all();
        $membersId = $allrequest["selectedMember"];
        $sizeofmemberId = sizeof($membersId);
        for ($i = 0; $i < $sizeofmemberId; $i++) {
            $kumiren2member = new Kumiren2member;
            $kumiren2member->kumiren_id = $latest_kumiren_id;
            $kumiren2member->member_id  = $membersId[$i];
            $kumiren2member->role       = "NONE";
            $kumiren2member->save();
        }


        $kumiren_members = Member::all()->whereIn('id',$membersId);
        $now_year = date("Y");
        $now_month = date("n");
        $fiscal_year = $now_year;
        if ($now_month<4) {
            $fiscal_year = $now_year - 1;
        }

        return view('kumiren_select_staffs')->with([
            "kumiren_members" => $kumiren_members,
            "Id" => $membersId,
            "fiscal_year" => $fiscal_year,
        ]);
    }


    public function setstaff(Request $request)
    {
        $allrequest = $request->all();
        $rootId = $allrequest["root"];
        $HId    = $allrequest["H"];
        $SId    = $allrequest["S"];
        $FId    = $allrequest["F"];

        $latest_kumiren = DB::table('kumirens')->latest()->first();
        $latest_kumiren_id = $latest_kumiren->id;

        $root = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$rootId)->first();
        $H    = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$HId)->first();
        $S    = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$SId)->first();
        $F    = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$FId)->first();

        $root->role = "root";
        $H->role    = "H";
        $S->role    = "S";
        $F->role    = "F";

        $root->save();
        $H->save();
        $S->save();
        $F->save();

    }

    public function setfeed(Request $request)
    {
        $allrequest = $request->all();
        $latest_kumiren = DB::table('kumirens')->latest()->first();
        $latest_kumiren_id = $latest_kumiren->id;
        $kumiren_members = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->get();


        $kumiren_members->sortByDesc('level');

        $countfeed = 0;
        foreach ($kumiren_members as $kumiren_member)
        {
            if($countfeed>=6) {break;}
            if($kumiren_member->role != "NONE") {continue;}


            $countfeed = $countfeed + 1;
            $kumiren_member->role = "feed";
            $kumiren_member->save();

        }

    }

    public function result(Request $request)
    {
      $this->setstaff($request);
      $this->setfeed($request);

      $allrequest = $request->all();
      $latest_kumiren = DB::table('kumirens')->latest()->first();
      $latest_kumiren_id = $latest_kumiren->id;
      $kumiren_members = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->get();

      return view('kumiren_result')->with([
          "kumiren_members" => $kumiren_members,
      ]);
    }



}
