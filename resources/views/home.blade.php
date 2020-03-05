@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">なにかの一覧とか</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content">
                        <div class="links">
                            <li><a href="{{ url('/kumiren/oyagami')}}">組連</a></li>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                              <button style="border:1px solid black;"onclick="location.href='{{url('/')}}'" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>Topへ</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
