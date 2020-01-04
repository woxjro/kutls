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
                            foreach($kumiren_members as $kumiren_member){
                                if($kumiren_member->role == "root"){
                                    $root = $kumiren_member;

                                }
                                if($kumiren_member->role == "H"){
                                    $H = $kumiren_member;
                                }
                                if($kumiren_member->role == "F"){
                                    $F = $kumiren_member;
                                }
                                if($kumiren_member->role == "S"){
                                    $S = $kumiren_member;
                                }
                            }
                        ?>
                        <p>・根：
                            @foreach($kumiren_members as $member)
                                @if($member->role == "root")
                                    <?php echo $member->last_name; ?>
                                @endif
                            @endforeach
                        </p>
                        <p>・H：</p>
                        <p>・F：</p>
                        <p>・S：</p>
                    </div>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
