@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">組連のメンバー一覧</div>

                <div class="card-body">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="form-group">
                            組連スタッフを選びましょう。
                        </div>

                        <form method="post" action="{{url('/kumiren/select_members/select_staffs/result')}}">
                            @csrf
                            <?php $sex = [
                                "male" => "男性",
                                "female" => "女性",
                            ]?>


                            <div class="role-part">
                                ・根：
                                <select name="root" size="1">
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>
                            </div>
                            <p></p>
                            <div class="role-part">
                                ・H：
                                <select name="H" size="1">
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>
                            </div>
                            <p></p>
                            <div class="role-part">
                                ・S：
                                <select name="S" size="1">
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>
                            </div>
                            <p></p>
                            <div class="role-part">
                                ・F：
                                <select name="F" size="1">
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>
                            </div>
                            <p></p>








                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                      <button type="submit" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>作成</button>
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
