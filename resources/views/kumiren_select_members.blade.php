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
                        組連メンバーを選びましょう。
                    </div>

                    <?php $sex = [
                        "male" => "男性",
                        "female" => "女性",
                    ]?>

                    <div class="memberlist">
                        <form method="post" action="{{url('/kumiren/select_members/select_staffs')}}">
                            @csrf
                            <div class="showmembers male">
                                @foreach($members as $member)
                                    @if($member->sex == "male")
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="showmembers female">
                                @foreach($members as $member)
                                    @if($member->sex == "female")
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                          <button type="submit" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>次へ</button>
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
