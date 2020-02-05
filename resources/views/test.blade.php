@extends('layouts.test4shapeshift')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">shapeshiftのテスト</div>

                <div class="card-body">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="form-group">
                            shapeshiftのテスト
                        </div>
                        <!-- Javascript -->



                        <div>
                            <p>上段</p>
                            <div class="container-shapeshift1" id="test1">
                                <p>ABCD</p>
                                <p>ABCD</p>
                                <p>ABCD</p>
                                <p>ABCD</p>
                            </div>
                        </div>
                        <div>
                            <p>下段</p>
                            <div class="container-shapeshift2" id="test2">
                                <p>ABCD</p>
                                <p>ABCD</p>
                                <p>ABCD</p>
                                <p>ABCD</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
