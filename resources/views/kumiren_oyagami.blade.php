@extends('layouts.kumiren_oyagami_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">親紙一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="form-group">
                        組連メンバーを選びましょう。
                    </div>
                    <?php $num = 1; ?>
                    @foreach($oyagamis as $oyagami)
                        <div>
                            <span style="text-align:center">No.<?php if ($num < 10) {echo "0".$num;}else{echo $num;}$num++; ?>：</span>
                            <a href="{{ url('/kumiren/'.$oyagami->id.'/select_members/select_staffs')}}">{{$oyagami->name}}</a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
