@extends('layouts.kumiren_oyagami_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="margin-bottom:20px;"class="card">
                <div class="card-header">新規親紙を作成</div>
                <div class="card-body">
                    <!-- バリデーションエラーの表示 -->
                    @include('common.errors')

                    <!-- 新親紙フォーム -->
                    <form action="{{url('/kumiren/select_members')}}" method="POST" class="form-horizontal">
                        @csrf

                        <!-- 親紙名 -->
                        <div class="form-group">
                            <label for="oyagami-name" class="col-sm-3 control-label">親紙名を記入</label>

                            <div class="col-sm-6">
                                <input type="text" name="oyagami_name" id="oyagami-name" class="form-control" placeholder="例) 強連・水曜担用">
                            </div>
                        </div>

                        <!-- 親紙追加ボタン -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button style="background-color:#bdbdbd;"style="border:1px solid black!important;"type="submit" class="btn btn-default" id="new-oyagami-button">
                                    作成
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="card">
                <div class="card-header">既存親紙一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="form-group">

                    </div>




                    <div class="panel panel-default">
                        <table class="table table-striped oyagami-table">

                            <thead>
                                <tr>
                                    <th style="font-weight:normal;">既存の親紙</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1; ?>
                                @foreach($oyagamis as $oyagami)
                                    <tr>
                                        <td class="table-text">
                                            <a href="{{ url('/kumiren/'.$oyagami->id.'/select_members/select_staffs')}}">{{$oyagami->name}}</a>
                                        </td>
                                        <td>
                                            <button style="color:white;" type="button" class="btn btn-info" id="oyagami-detail">
                                                <i style="color:white;"class="fa fa-btn fa-info-circle"></i> 詳細
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{ url('/kumiren/oyagami/'.$oyagami->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i> 削除
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>





                </div>

            </div>
        </div>
    </div>
</div>
@endsection
