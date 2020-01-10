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
                        <?php

                            foreach($kumiren2members as $kumiren2member){
                                if($kumiren2member->role == "root"){
                                    $rootId = $kumiren2member->member_id;
                                }
                                if($kumiren2member->role == "H"){
                                    $HId = $kumiren2member->member_id;
                                }
                                if($kumiren2member->role == "F"){
                                    $FId = $kumiren2member->member_id;
                                }
                                if($kumiren2member->role == "S"){
                                    $SId = $kumiren2member->member_id;
                                }

                            }

                            foreach ($members as $member) {
                                if($member->id == $rootId) $root = $member;
                                if($member->id == $HId) $H = $member;
                                if($member->id == $FId) $F = $member;
                                if($member->id == $SId) $S = $member;
                            }

                            $sex = [
                                "male" => "男性",
                                "female" => "女性",
                            ]




                        ?>

                        <p>・根：<?php echo ($fiscal_year - $root->enrollment_year + 1)."回生：".$sex[$root->sex]."：".$root->last_name;?></p>
                        <p>・H：<?php echo ($fiscal_year - $H->enrollment_year + 1)."回生：".$sex[$H->sex]."：".$H->last_name;?></p>
                        <p>・S：<?php echo ($fiscal_year - $S->enrollment_year + 1)."回生：".$sex[$S->sex]."：".$S->last_name;?></p>
                        <p>・F：<?php echo ($fiscal_year - $F->enrollment_year + 1)."回生：".$sex[$F->sex]."：".$F->last_name;?></p>

                        <p>・球出し：<?php echo ($fiscal_year - $feeds[0]->enrollment_year + 1)."回生：".$sex[$feeds[0]->sex]."：".$feeds[0]->last_name;?></p>
                        <p>・球出し：<?php echo ($fiscal_year - $feeds[1]->enrollment_year + 1)."回生：".$sex[$feeds[1]->sex]."：".$feeds[1]->last_name;?></p>
                        <p>・球出し：<?php echo ($fiscal_year - $feeds[2]->enrollment_year + 1)."回生：".$sex[$feeds[2]->sex]."：".$feeds[2]->last_name;?></p>
                        <p>・球出し：<?php echo ($fiscal_year - $feeds[3]->enrollment_year + 1)."回生：".$sex[$feeds[3]->sex]."：".$feeds[3]->last_name;?></p>
                        <p>・球出し：<?php echo ($fiscal_year - $feeds[4]->enrollment_year + 1)."回生：".$sex[$feeds[4]->sex]."：".$feeds[4]->last_name;?></p>
                        <p>・球出し：<?php echo ($fiscal_year - $feeds[5]->enrollment_year + 1)."回生：".$sex[$feeds[5]->sex]."：".$feeds[5]->last_name;?></p>



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
