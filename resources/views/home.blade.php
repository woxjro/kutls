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
