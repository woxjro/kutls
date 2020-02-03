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
                          <script>
                              function shapeshifttest() {
                                $(".container-shapeshift").shapeshift();
                              }
                              function al(){
                                alert("asdf");
                              };
                              $(document).ready(shapeshifttest());
                              al();

                          </script>


                        <div>
                            <div class="container-shapeshift">
                              <div><p>a</p></div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
