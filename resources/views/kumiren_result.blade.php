@extends('layouts.kumiren_result_layout')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">組連表</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="information">
                            <div class="show info">
                                <div class="info-label"><p>役職</p></div>
                                @if($root->sex == "male")
                                    <p>&emsp;根&nbsp;&nbsp;&nbsp;<i class="fas fa-people-carry" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $root->enrollment_year + 1)."回生"."&emsp;".$root->last_name;?></p>
                                @else
                                    <p>&emsp;根&nbsp;&nbsp;&nbsp;<i class="fas fa-people-carry" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $root->enrollment_year + 1)."回生"."&emsp;".$root->last_name;?></p>
                                @endif

                                @if($H->sex == "male")
                                    <p>&emsp;H&emsp;<i class="fas fa-heading" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $H->enrollment_year + 1)."回生"."&emsp;".$H->last_name;?></p>
                                @else
                                    <p>&emsp;H&emsp;<i class="fas fa-heading" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $H->enrollment_year + 1)."回生"."&emsp;".$H->last_name;?></p>
                                @endif



                                @if($F->sex == "male")
                                    <p>&emsp;&nbsp;F&emsp;<i class="fab fa-facebook-square" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $F->enrollment_year + 1)."回生"."&emsp;".$F->last_name;?></p>
                                @else
                                    <p>&emsp;&nbsp;F&emsp;<i class="fab fa-facebook-square" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $F->enrollment_year + 1)."回生"."&emsp;".$F->last_name;?></p>
                                @endif

                                @if($S->sex == "male")
                                    <p>&emsp;&nbsp;S&emsp;<i class="fab fa-stripe-s" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $S->enrollment_year + 1)."回生"."&emsp;".$S->last_name;?></p>
                                @else
                                    <p>&emsp;&nbsp;S&emsp;<i class="fab fa-stripe-s" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $S->enrollment_year + 1)."回生"."&emsp;".$S->last_name;?></p>
                                @endif


                            </div>
                            <div class="show info">
                                <div class="info-label"><p>球出し</p></div>
                                @if($feeds[0]->sex=="male")
                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $feeds[0]->enrollment_year + 1)."回生"."&emsp;".$feeds[0]->last_name;?></p>
                                @else
                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $feeds[0]->enrollment_year + 1)."回生"."&emsp;".$feeds[0]->last_name;?></p>
                                @endif

                                @if($feeds[1]->sex=="male")
                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $feeds[1]->enrollment_year + 1)."回生"."&emsp;".$feeds[1]->last_name;?></p>
                                @else
                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $feeds[1]->enrollment_year + 1)."回生"."&emsp;".$feeds[1]->last_name;?></p>
                                @endif

                                @if($feeds[2]->sex=="male")
                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $feeds[2]->enrollment_year + 1)."回生"."&emsp;".$feeds[2]->last_name;?></p>
                                @else
                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $feeds[2]->enrollment_year + 1)."回生"."&emsp;".$feeds[2]->last_name;?></p>
                                @endif

                                @if($feeds[3]->sex=="male")
                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $feeds[3]->enrollment_year + 1)."回生"."&emsp;".$feeds[3]->last_name;?></p>
                                @else
                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $feeds[3]->enrollment_year + 1)."回生"."&emsp;".$feeds[3]->last_name;?></p>
                                @endif

                                @if($feeds[4]->sex=="male")
                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $feeds[4]->enrollment_year + 1)."回生"."&emsp;".$feeds[4]->last_name;?></p>
                                @else
                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $feeds[4]->enrollment_year + 1)."回生"."&emsp;".$feeds[4]->last_name;?></p>
                                @endif

                                @if($feeds[5]->sex=="male")
                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $feeds[5]->enrollment_year + 1)."回生"."&emsp;".$feeds[5]->last_name;?></p>
                                @else
                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $feeds[5]->enrollment_year + 1)."回生"."&emsp;".$feeds[5]->last_name;?></p>
                                @endif


                            </div>
                            <div class="show info">
                                <div class="info-label"><p>チーム別レベル</p></div>
                                <p><?php echo "&emsp;TeamA&emsp;Level".$teamslevel["A"] ?></p>
                                <p><?php echo "&emsp;TeamB&emsp;Level".$teamslevel["B"] ?></p>
                                <p><?php echo "&emsp;TeamC&emsp;Level".$teamslevel["C"] ?></p>
                                <p><?php echo "&emsp;TeamD&emsp;Level".$teamslevel["D"] ?></p>
                                <p><?php echo "&emsp;TeamE&emsp;Level".$teamslevel["E"] ?></p>
                                <p><?php echo "&emsp;TeamF&emsp;Level".$teamslevel["F"] ?></p>
                            </div>
                    </div>

                        <div class="show teams">
                            <div class="show members">
                                <div class="team-label"><p>A</p></div>
                                <div class="show-feeds teamAfeeds" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["feed1stteam"]=="A" || $kumirenmemberinfo["feed2ndteam"]=="A")
                                            @if($kumirenmemberinfo["sex"] == "male")
                                                <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @else
                                                <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <div class="show-members teamAplayers" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["team"]=="A")
                                            @if($kumirenmemberinfo["role"]!="NONE" && $kumirenmemberinfo["role"]!="feed")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-people-carry" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-people-carry" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="show members">
                                <div class="team-label"><p>B</p></div>
                                <div class="show-feeds teamBfeeds" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["feed1stteam"]=="B" || $kumirenmemberinfo["feed2ndteam"]=="B")
                                            @if($kumirenmemberinfo["sex"] == "male")
                                                <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @else
                                                <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <div class="show-members teamBplayers" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["team"]=="B")
                                            @if($kumirenmemberinfo["role"]!="NONE" && $kumirenmemberinfo["role"]!="feed")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="show members">
                                <div class="team-label"><p>C</p></div>
                                <div class="show-feeds teamCfeeds" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["feed1stteam"]=="C" || $kumirenmemberinfo["feed2ndteam"]=="C")
                                        @if($kumirenmemberinfo["sex"] == "male")
                                            <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                        @else
                                            <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                        @endif
                                        @endif
                                    @endforeach
                                </div>

                                <div class="show-members teamCplayers" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["team"]=="C")
                                            @if($kumirenmemberinfo["role"]!="NONE" && $kumirenmemberinfo["role"]!="feed")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-heading" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-heading" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="show members">
                                <div class="team-label"><p>D</p></div>
                                <div class="show-feeds teamDfeeds" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["feed1stteam"]=="D" || $kumirenmemberinfo["feed2ndteam"]=="D")
                                            @if($kumirenmemberinfo["sex"] == "male")
                                                <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @else
                                                <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <div class="show-members teamDplayers" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["team"]=="D")
                                            @if($kumirenmemberinfo["role"]!="NONE" && $kumirenmemberinfo["role"]!="feed")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fab fa-stripe-s" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fab fa-stripe-s" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="show members">
                                <div class="team-label"><p>E</p></div>
                                <div class="show-feeds teamEfeeds" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["feed1stteam"]=="E" || $kumirenmemberinfo["feed2ndteam"]=="E")
                                            @if($kumirenmemberinfo["sex"] == "male")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <div class="show-members teamEplayers" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["team"]=="E")
                                            @if($kumirenmemberinfo["role"]!="NONE" && $kumirenmemberinfo["role"]!="feed")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fab fa-facebook-square" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fab fa-facebook-square" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <div class="show members">
                                <div class="team-label"><p>F</p></div>
                                <div class="show-feeds teamFfeeds" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["feed1stteam"]=="F" || $kumirenmemberinfo["feed2ndteam"]=="F")
                                            @if($kumirenmemberinfo["sex"] == "male")
                                                <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @else
                                                <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <div class="show-members teamFplayers" id="showmembers">
                                    @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                        @if($kumirenmemberinfo["team"]=="F")
                                            @if($kumirenmemberinfo["role"]!="NONE" && $kumirenmemberinfo["role"]!="feed")
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @else
                                                @if($kumirenmemberinfo["sex"] == "male")
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #1b2538"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @else
                                                    <p>&emsp;<i class="fas fa-circle" style="color: #c2185b"></i>&emsp;<?php echo ($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生　".$kumirenmemberinfo["last_name"];?></p>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                              <button onclick="location.href='{{url('/')}}'" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>Topへ戻る</button>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
