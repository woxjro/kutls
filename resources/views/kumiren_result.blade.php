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




                        ?>
                        <p>・根：{{ $root->last_name }}</p>
                        <p>・H：{{ $H->last_name }}</p>
                        <p>・S：{{ $S->last_name }}</p>
                        <p>・F：{{ $F->last_name }}</p>

                        <p>・球出し：{{ $feeds[0]->last_name }}</p>
                        <p>・球出し：{{ $feeds[1]->last_name }}</p>
                        <p>・球出し：{{ $feeds[2]->last_name }}</p>
                        <p>・球出し：{{ $feeds[3]->last_name }}</p>
                        <p>・球出し：{{ $feeds[4]->last_name }}</p>
                        <p>・球出し：{{ $feeds[5]->last_name }}</p>









                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
