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


    //根回し、HSFをセット
    public function setstaff(Request $request,$kumiren_id){
        $allrequest = $request->all();
        $rootId = $allrequest["root"];
        $HId    = $allrequest["H"];
        $SId    = $allrequest["S"];
        $FId    = $allrequest["F"];

        $kumiren = Kumiren::where('id',$kumiren_id)->first();
        $latest_kumiren_id = $kumiren->id;

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
    public function setfeed($kumiren_id){
        $kumiren = Kumiren::where('id',$kumiren_id)->first();
        $latest_kumiren_id = $kumiren->id;
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


        $feeds = $this->getfeed($kumiren_id);
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
    public function getfeed($kumiren_id){
        $feedsarray = [];
        $kumiren = Kumiren::where('id',$kumiren_id)->first();
        $latest_kumiren_id = $kumiren->id;
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

    public function getMemberNum($kumiren_id,$team){
        $kumiren2members = Kumiren2member::where('kumiren_id',$kumiren_id)->where('team',$team)->get();
        $membernum = $kumiren2members->count();
        return $membernum;
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

    public function setmember($kumiren_id){
        $kumiren = Kumiren::where('id',$kumiren_id)->first();
        $latest_kumiren_id = $kumiren->id;
        $kumiren2members_noteam = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('team','NONE')->get();

        $members_male_noteam          = collect([]);
        $members_female_noteam        = collect([]);
        $kumiren2members_male_noteam   = collect([]);
        $kumiren2members_female_noteam = collect([]);

        foreach ($kumiren2members_noteam as $kumiren2member_noteam) {
            $member = Member::where('id',$kumiren2member_noteam->member_id)->first();
            if ($member->sex == "male") {
                //チームに割り振られていない男子のコレクション
                $members_male_noteam->push($member);
                $kumiren2members_male_noteam->push($kumiren2member_noteam);
            }else{
                //チームに割り振られていない女子のコレクション
                $members_female_noteam->push($member);
                $kumiren2members_female_noteam->push($kumiren2member_noteam);
            }
        }



        $female_num_teams = collect([
            ["team" => "A", "female_num" => $this->getFemaleNum($latest_kumiren_id,"A")],
            ["team" => "B", "female_num" => $this->getFemaleNum($latest_kumiren_id,"B")],
            ["team" => "C", "female_num" => $this->getFemaleNum($latest_kumiren_id,"C")],
            ["team" => "D", "female_num" => $this->getFemaleNum($latest_kumiren_id,"D")],
            ["team" => "E", "female_num" => $this->getFemaleNum($latest_kumiren_id,"E")],
            ["team" => "F", "female_num" => $this->getFemaleNum($latest_kumiren_id,"F")],
        ]);

        while($kumiren2members_female_noteam->count()>0){
            $female_num_teams = $female_num_teams->sortByDesc("female_num");

            $kumiren2members_female_noteam = $kumiren2members_female_noteam->shuffle();
            $female_kumiren2member = $kumiren2members_female_noteam->pop();
            $female_kumiren2member->team = collect($female_num_teams->last())->get('team');
            $female_kumiren2member->save();
            $female_num_teams = collect([
                ["team" => "A", "female_num" => $this->getFemaleNum($latest_kumiren_id,"A")],
                ["team" => "B", "female_num" => $this->getFemaleNum($latest_kumiren_id,"B")],
                ["team" => "C", "female_num" => $this->getFemaleNum($latest_kumiren_id,"C")],
                ["team" => "D", "female_num" => $this->getFemaleNum($latest_kumiren_id,"D")],
                ["team" => "E", "female_num" => $this->getFemaleNum($latest_kumiren_id,"E")],
                ["team" => "F", "female_num" => $this->getFemaleNum($latest_kumiren_id,"F")],
            ]);
        }


        $male_num_teams = collect([
            ["team" => "A", "member_num" => $this->getMemberNum($latest_kumiren_id,"A")],
            ["team" => "B", "member_num" => $this->getMemberNum($latest_kumiren_id,"B")],
            ["team" => "C", "member_num" => $this->getMemberNum($latest_kumiren_id,"C")],
            ["team" => "D", "member_num" => $this->getMemberNum($latest_kumiren_id,"D")],
            ["team" => "E", "member_num" => $this->getMemberNum($latest_kumiren_id,"E")],
            ["team" => "F", "member_num" => $this->getMemberNum($latest_kumiren_id,"F")],
        ]);

        while($kumiren2members_male_noteam->count()>0){
            $male_num_teams = $male_num_teams->sortByDesc("member_num");

            $kumiren2members_male_noteam = $kumiren2members_male_noteam->shuffle();
            $male_kumiren2member = $kumiren2members_male_noteam->pop();
            $male_kumiren2member->team = collect($male_num_teams->last())->get('team');
            $male_kumiren2member->save();
            $male_num_teams = collect([
                ["team" => "A", "member_num" => $this->getMemberNum($latest_kumiren_id,"A")],
                ["team" => "B", "member_num" => $this->getMemberNum($latest_kumiren_id,"B")],
                ["team" => "C", "member_num" => $this->getMemberNum($latest_kumiren_id,"C")],
                ["team" => "D", "member_num" => $this->getMemberNum($latest_kumiren_id,"D")],
                ["team" => "E", "member_num" => $this->getMemberNum($latest_kumiren_id,"E")],
                ["team" => "F", "member_num" => $this->getMemberNum($latest_kumiren_id,"F")],
            ]);
        }

    }

    //役割とかメンバーの名前とかを同時に持つ関数を追加
    public function getKumirenMemberInfo($kumiren2member_id){
        $kumiren2member = Kumiren2member::where('id',$kumiren2member_id)->first();
        $member = Member::where('id',$kumiren2member->member_id)->first();
        $kumirenmemberinfo = collect([
            'id'              => $member->id,
            'enrollment_year' => $member->enrollment_year,
            'sex'             => $member->sex,
            'last_name'       => $member->last_name,
            'first_name'      => $member->first_name,
            'level'           => $member->level,
            'role'            => $kumiren2member->role,
            'feed1stteam'     => $kumiren2member->feed1stteam,
            'feed2ndteam'     => $kumiren2member->feed2ndteam,
            'team'            => $kumiren2member->team,
        ]);
        return $kumirenmemberinfo;
    }
    //上のやつを親紙分のメンバーを返す。
    public function getKumirenMembersInfo($kumiren_id){
        $kumiren2members = Kumiren2member::where('kumiren_id',$kumiren_id)->get();
        $kumirenmembersinfo = collect([]);
        foreach ($kumiren2members as $kumiren2member) {
            $kumirenmemberinfo = $this->getKumirenMemberInfo($kumiren2member->id);
            $kumirenmembersinfo->push($kumirenmemberinfo);
        }
        return $kumirenmembersinfo;
    }

    public function culcTeamLevel($kumirenmembersinfo){
      $TeamsLevel = collect([
        "A" => 0,
        "B" => 0,
        "C" => 0,
        "D" => 0,
        "E" => 0,
        "F" => 0,
      ]);
      foreach ($kumirenmembersinfo as $kumirenmemberinfo) {
        $TeamsLevel[$kumirenmemberinfo["team"]] += $kumirenmemberinfo["level"];
      }
      return $TeamsLevel;
    }




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
            "kumiren" => $kumiren,
            "members" => $members,
            "fiscal_year" => $fiscal_year,
        ]);
    }
    //
    public function showKumirenMembers(Request $request,$kumiren_id){
        $kumiren = Kumiren::where('id',$kumiren_id)->first();
        $latest_kumiren_id = $kumiren->id;



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


        $kumiren_members = Member::all()->whereIn('id',$membersId)->sortBy('enrollment_year');
        $now_year  = date("Y");
        $now_month = date("n");
        $fiscal_year = $now_year;
        if ($now_month<4) {
            $fiscal_year = $now_year - 1;
        }

        return view('kumiren_select_staffs')->with([
            "kumiren" => $kumiren,
            "kumiren_members" => $kumiren_members,
            //"Id" => $membersId,
            "fiscal_year" => $fiscal_year,
        ]);
    }
    //リザルト画面用の関数
    public function result(Request $request,$kumiren_id){
      $kumiren = Kumiren::where('id',$kumiren_id)->first();
      $this->setstaff($request,$kumiren_id);
      $this->setfeed($kumiren_id);


      $latest_kumiren_id = $kumiren->id;
      $members = Member::all();
      $kumiren2members = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->get();

      $feeds = $this->getfeed($kumiren_id);
      $this->setmember($kumiren_id);

      $now_year = date("Y");
      $now_month = date("n");
      $fiscal_year = $now_year;
      if ($now_month<4) {
          $fiscal_year = $now_year - 1;
      }

      $rootId = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('role','root')->first()->member_id;
      $HId    = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('role','H')->first()->member_id;
      $FId    = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('role','F')->first()->member_id;
      $SId    = Kumiren2member::where('kumiren_id',$latest_kumiren_id)->where('role','S')->first()->member_id;

      $root = Member::where('id',$rootId)->first();
      $H    = Member::where('id',$HId)->first();
      $F    = Member::where('id',$FId)->first();
      $S    = Member::where('id',$SId)->first();
      $sex = [
          "male" => "男性",
          "female" => "女性",
      ];

      $kumirenmembersinfo = $this->getKumirenMembersInfo($latest_kumiren_id);
      $teamslevel =$this->culcTeamLevel($kumirenmembersinfo);


      return view('kumiren_result')->with([
          "kumiren"             => $kumiren,
          "members"             => $members,
          "kumiren2members"     => $kumiren2members,
          "kumirenmembersinfo"  => $kumirenmembersinfo,
          "teamslevel"          => $teamslevel,
          "root"  => $root,
          "H"     => $H,
          "F"     => $F,
          "S"     => $S,
          "sex"   => $sex,
          "feeds" => $feeds,
          "fiscal_year" => $fiscal_year,
      ]);
    }



}
