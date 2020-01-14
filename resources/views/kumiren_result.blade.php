@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メンバー一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="form-group">
                        組連表
                    </div>
                    <div>

                        <div class="show staffs">
                            <p>・根：<?php echo ($fiscal_year - $root->enrollment_year + 1)."回生：".$sex[$root->sex]."：".$root->last_name;?></p>
                            <p>・H：<?php echo ($fiscal_year - $H->enrollment_year + 1)."回生：".$sex[$H->sex]."：".$H->last_name;?></p>
                            <p>・S：<?php echo ($fiscal_year - $S->enrollment_year + 1)."回生：".$sex[$S->sex]."：".$S->last_name;?></p>
                            <p>・F：<?php echo ($fiscal_year - $F->enrollment_year + 1)."回生：".$sex[$F->sex]."：".$F->last_name;?></p>
                        </div>
                        <br />
                        <div class="show feeds">
                            <p>・球出し：<?php echo ($fiscal_year - $feeds[0]->enrollment_year + 1)."回生：".$sex[$feeds[0]->sex]."：".$feeds[0]->last_name;?></p>
                            <p>・球出し：<?php echo ($fiscal_year - $feeds[1]->enrollment_year + 1)."回生：".$sex[$feeds[1]->sex]."：".$feeds[1]->last_name;?></p>
                            <p>・球出し：<?php echo ($fiscal_year - $feeds[2]->enrollment_year + 1)."回生：".$sex[$feeds[2]->sex]."：".$feeds[2]->last_name;?></p>
                            <p>・球出し：<?php echo ($fiscal_year - $feeds[3]->enrollment_year + 1)."回生：".$sex[$feeds[3]->sex]."：".$feeds[3]->last_name;?></p>
                            <p>・球出し：<?php echo ($fiscal_year - $feeds[4]->enrollment_year + 1)."回生：".$sex[$feeds[4]->sex]."：".$feeds[4]->last_name;?></p>
                            <p>・球出し：<?php echo ($fiscal_year - $feeds[5]->enrollment_year + 1)."回生：".$sex[$feeds[5]->sex]."：".$feeds[5]->last_name;?></p>
                        </div>
                        <br />
                        <div class="show teamlevel">
                            <p><?php echo "・TeamA：Level".$teamslevel["A"] ?></p>
                            <p><?php echo "・TeamB：Level".$teamslevel["B"] ?></p>
                            <p><?php echo "・TeamC：Level".$teamslevel["C"] ?></p>
                            <p><?php echo "・TeamD：Level".$teamslevel["D"] ?></p>
                            <p><?php echo "・TeamE：Level".$teamslevel["E"] ?></p>
                            <p><?php echo "・TeamF：Level".$teamslevel["F"] ?></p>
                        </div>
                        <br />
                        <div class="show">
                            @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                @if($kumirenmemberinfo["team"]=="A")
                                    <p><?php echo "・".$kumirenmemberinfo["team"]."：".$kumirenmemberinfo["role"]."：".($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生：".$sex[$kumirenmemberinfo["sex"]]."：".$kumirenmemberinfo["last_name"];?></p>
                                @endif
                            @endforeach
                            <br />
                            @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                @if($kumirenmemberinfo["team"]=="B")
                                    <p><?php echo "・".$kumirenmemberinfo["team"]."：".$kumirenmemberinfo["role"]."：".($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生：".$sex[$kumirenmemberinfo["sex"]]."：".$kumirenmemberinfo["last_name"];?></p>
                                @endif
                            @endforeach
                            <br />
                            @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                @if($kumirenmemberinfo["team"]=="C")
                                    <p><?php echo "・".$kumirenmemberinfo["team"]."：".$kumirenmemberinfo["role"]."：".($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生：".$sex[$kumirenmemberinfo["sex"]]."：".$kumirenmemberinfo["last_name"];?></p>
                                @endif
                            @endforeach
                            <br />
                            @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                @if($kumirenmemberinfo["team"]=="D")
                                    <p><?php echo "・".$kumirenmemberinfo["team"]."：".$kumirenmemberinfo["role"]."：".($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生：".$sex[$kumirenmemberinfo["sex"]]."：".$kumirenmemberinfo["last_name"];?></p>
                                @endif
                            @endforeach
                            <br />
                            @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                @if($kumirenmemberinfo["team"]=="E")
                                    <p><?php echo "・".$kumirenmemberinfo["team"]."：".$kumirenmemberinfo["role"]."：".($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生：".$sex[$kumirenmemberinfo["sex"]]."：".$kumirenmemberinfo["last_name"];?></p>
                                @endif
                            @endforeach
                            <br />
                            @foreach($kumirenmembersinfo as $kumirenmemberinfo)
                                @if($kumirenmemberinfo["team"]=="F")
                                    <p><?php echo "・".$kumirenmemberinfo["team"]."：".$kumirenmemberinfo["role"]."：".($fiscal_year - $kumirenmemberinfo["enrollment_year"] + 1)."回生：".$sex[$kumirenmemberinfo["sex"]]."：".$kumirenmemberinfo["last_name"];?></p>
                                @endif
                            @endforeach
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                              <button onclick="location.href='{{url('/')}}'" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>Homeへ戻る</button>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
