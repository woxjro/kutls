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
    public function showMembers(){
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
    //
    public function showKumirenMembers(Request $request){
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
            $kumiren2member->feed1stteam= "NONE";
            $kumiren2member->feed2ndteam= "NONE";
            $kumiren2member->team       = "NONE";
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

    //根回し、HSFをセット
    public function setstaff(Request $request){
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

        $root->team = "A";
        $H->team    = "C";
        $S->team    = "D";
        $F->team    = "E";


        $root->save();
        $H->save();
        $S->save();
        $F->save();

    }

    //球出しメンバーをセット
    public function setfeed(Request $request){
        $allrequest = $request->all();
        $latest_kumiren = DB::table('kumirens')->latest()->first();
        $latest_kumiren_id = $latest_kumiren->id;
        $kumiren2members = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->get();

        $members = Member::all();
        $sortedmembers = $members->sortByDesc('level');

        $countexistedfeeds = 0;
        foreach ($kumiren2members as $kumiren2member) {
            if($kumiren2member->role == "feed") $countexistedfeeds++;
        }

        $countfeeds = 0;
        foreach ($sortedmembers as $member) {
            foreach ($kumiren2members as $kumiren2member) {
                if ($member->id == $kumiren2member->member_id && $countfeeds < 6 && ($kumiren2member->role == "NONE") && ($countexistedfeeds == 0))
                {
                    $kumiren2member->role = "feed";
                    $kumiren2member->save();
                    $countfeeds++;
                }
            }
        }


        $feeds = $this->getfeed();
        $feeds = $feeds->sortByDesc('level');
        $feeds4ACE = collect([]);
        $feeds4BDF = collect([]);

        $feeds4ACE->push($feeds->shift());
        $feeds4BDF->push($feeds->shift());
        $feeds4ACE->push($feeds->shift());
        $feeds4BDF->push($feeds->shift());
        $feeds4ACE->push($feeds->shift());
        $feeds4BDF->push($feeds->shift());

        $shuffled_feeds4ACE = $feeds4ACE->shuffle();
        $shuffled_feeds4BDF = $feeds4BDF->shuffle();



        $shuffled_feeds4ACE_1st = $shuffled_feeds4ACE->shift();
        $shuffled_feeds4ACE_2nd = $shuffled_feeds4ACE->shift();
        $shuffled_feeds4ACE_3rd = $shuffled_feeds4ACE->shift();

        $shuffled_feeds4BDF_1st = $shuffled_feeds4BDF->shift();
        $shuffled_feeds4BDF_2nd = $shuffled_feeds4BDF->shift();
        $shuffled_feeds4BDF_3rd = $shuffled_feeds4BDF->shift();

        $shuffled_feeds4ACE_1st_kumiren2member = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$shuffled_feeds4ACE_1st->id)->first();
        $shuffled_feeds4ACE_2nd_kumiren2member = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$shuffled_feeds4ACE_2nd->id)->first();
        $shuffled_feeds4ACE_3rd_kumiren2member = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$shuffled_feeds4ACE_3rd->id)->first();
        $shuffled_feeds4BDF_1st_kumiren2member = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$shuffled_feeds4BDF_1st->id)->first();
        $shuffled_feeds4BDF_2nd_kumiren2member = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$shuffled_feeds4BDF_2nd->id)->first();
        $shuffled_feeds4BDF_3rd_kumiren2member = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('member_id',$shuffled_feeds4BDF_3rd->id)->first();

        $shuffled_feeds4ACE_1st_kumiren2member->feed1stteam = "A";
        $shuffled_feeds4ACE_1st_kumiren2member->feed2ndteam = "C";
        $shuffled_feeds4ACE_1st_kumiren2member->team = "E";

        $shuffled_feeds4ACE_2nd_kumiren2member->feed1stteam = "A";
        $shuffled_feeds4ACE_2nd_kumiren2member->feed2ndteam = "E";
        $shuffled_feeds4ACE_2nd_kumiren2member->team = "C";

        $shuffled_feeds4ACE_3rd_kumiren2member->feed1stteam = "C";
        $shuffled_feeds4ACE_3rd_kumiren2member->feed2ndteam = "E";
        $shuffled_feeds4ACE_3rd_kumiren2member->team = "A";


        $shuffled_feeds4BDF_1st_kumiren2member->feed1stteam = "B";
        $shuffled_feeds4BDF_1st_kumiren2member->feed2ndteam = "D";
        $shuffled_feeds4BDF_1st_kumiren2member->team = "F";

        $shuffled_feeds4BDF_2nd_kumiren2member->feed1stteam = "B";
        $shuffled_feeds4BDF_2nd_kumiren2member->feed2ndteam = "F";
        $shuffled_feeds4BDF_2nd_kumiren2member->team = "D";

        $shuffled_feeds4BDF_3rd_kumiren2member->feed1stteam = "D";
        $shuffled_feeds4BDF_3rd_kumiren2member->feed2ndteam = "F";
        $shuffled_feeds4BDF_3rd_kumiren2member->team = "B";


        $shuffled_feeds4ACE_1st_kumiren2member->save();
        $shuffled_feeds4ACE_2nd_kumiren2member->save();
        $shuffled_feeds4ACE_3rd_kumiren2member->save();
        $shuffled_feeds4BDF_1st_kumiren2member->save();
        $shuffled_feeds4BDF_2nd_kumiren2member->save();
        $shuffled_feeds4BDF_3rd_kumiren2member->save();


    }
    //チームが振られていない男性の数を求める関数を書く。
    //チームが振られていない女性の数を求める関数を書く。

    //球出しメンバーを取得
    public function getfeed(){
        $feedsarray = [];
        $latest_kumiren = DB::table('kumirens')->latest()->first();
        $latest_kumiren_id = $latest_kumiren->id;
        $feeds = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('role','feed')->get();
        $members = Member::all();
        $sortedmembers = $members->sortByDesc('level');
        foreach ($sortedmembers as $member) {
            foreach ($feeds as $feed) {
                if ($member->id == $feed->member_id)
                {
                    array_push($feedsarray,$member);
                }
            }
        }

        return collect($feedsarray);
    }

    //kumiren_idから組連のメンバーを取得する関数
    public function getMembersByKumire2member($kumiren_id){
        $kumiren2members = Kumiren2member::where('kumiren_id',$kumiren_id)->get();
        $members = collect([]);
        foreach ($kumiren2members as $kumiren2member) {
            $member = Member::where('id',$kumiren2member->member_id)->first();
            $members->push($member);
        }
        return $members;
    }
    //組連のメンバーを性別でグループ分けする関数
    public function getMembersGroupBySex($kumiren_id){
        $members = $this->getMembersByKumire2member($kumiren_id);
        $groupedmembers = $members->groupBy('sex');
        return $groupedmembers;
    }

    public function getMaleNum($kumiren_id,$team){
        $kumiren2members = Kumiren2member::where('kumiren_id',$kumiren_id)->where('team',$team)->get();
        $malenum = 0;
        foreach ($kumiren2members as $kumiren2member) {
            $member = Member::where('id',$kumiren2member->member_id)->first();
            if ($member->sex == 'male') $malenum++;
        }
        return $malenum;
    }

    public function getFemaleNum($kumiren_id,$team){
        $kumiren2members = Kumiren2member::where('kumiren_id',$kumiren_id)->where('team',$team)->get();
        $femalenum = 0;
        foreach ($kumiren2members as $kumiren2member) {
            $member = Member::where('id',$kumiren2member->member_id)->first();
            if ($member->sex == 'female') $femalenum++;
        }
        return $femalenum;
    }

    public function setmember(){
        $latest_kumiren = DB::table('kumirens')->latest()->first();
        $latest_kumiren_id = $latest_kumiren->id;
        $kumiren2members_noteam = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('team','NONE')->get();

        $members_male_noteam    = collect([]);
        $members_female_noteam = collect([]);

        foreach ($kumiren2members_noteam as $kumiren2member_noteam) {
            $member = Member::where('id',$kumiren2member_noteam->member_id)->first();
            if ($member->sex == "male") {
                //チームに割り振られていない男子のコレクション
                $members_male_noteam->push($member);
            }else{
                //チームに割り振られていない女子のコレクション
                $members_female_noteam->push($member);
            }
        }
    }


    //球出しと役職をセットした後に、各チームを二人ずつにするためにBとFチームにメンバーを割り振る関数。
    public function setTwoMembers4BF($kumiren_id){
        $members = $this->getMembersGroupBySex($kumiren_id);
        $maleMember = $members['male']->sortByDesc('level');
        $maleMemberSize = $maleMember->count();
        $startPoint = $maleMemberSize/2 - 1;

        $maleMember4BF = $maleMember->splice($startPoint,2);
        $member_id_4B = $maleMember4BF->pop()->id;
        $member_id_4F = $maleMember4BF->pop()->id;

        $kumiren2member4B = Kumiren2member::where('kumiren_id',$kumiren_id)->where('member_id',$member_id_4B)->first();
        $kumiren2member4F = Kumiren2member::where('kumiren_id',$kumiren_id)->where('member_id',$member_id_4F)->first();

        $kumiren2member4B->team = 'B';
        $kumiren2member4F->team = 'F';

        $kumiren2member4B->save();
        $kumiren2member4F->save();

    }
    //リザルト画面用の関数
    public function result(Request $request)
    {
      $this->setstaff($request);
      $this->setfeed($request);
      $this->setmember();


      $allrequest = $request->all();
      $latest_kumiren = DB::table('kumirens')->latest()->first();
      $latest_kumiren_id = $latest_kumiren->id;
      $members = Member::all();
      $kumiren2members = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->get();

      $feeds = $this->getfeed();
      $this->setTwoMembers4BF($latest_kumiren_id);


      $now_year = date("Y");
      $now_month = date("n");
      $fiscal_year = $now_year;
      if ($now_month<4) {
          $fiscal_year = $now_year - 1;
      }


      return view('kumiren_result')->with([
          "members" => $members,
          "kumiren2members" => $kumiren2members,
          "feeds" => $feeds,
          "fiscal_year" => $fiscal_year,
      ]);
    }



}
