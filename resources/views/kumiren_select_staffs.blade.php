@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">組連のスタッフ選択</div>

                <div class="card-body">

                    <div class="card-body selectstaffscardbody">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="form-group">

                        </div>

                        <form method="post" class="select_staffs_form" action="{{url('/kumiren/'.$kumiren->id.'/select_members/select_staffs/result')}}" onSubmit="return StaffsCheck()">
                            @csrf
                            <?php $sex = [
                                "male" => "男性",
                                "female" => "女性",
                            ]?>

                            <!--

                            <div class="cp_ipselect">

                                <select name="root" size="1" class="cp_sl06" required>
                                    <option value="" hidden disabled selected></option>
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>

                                <span class="cp_sl06_highlight"></span>
                                <span class="cp_sl06_selectbar"></span>
                                <label class="cp_sl06_selectlabel">根</label>

                            </div>

                            <div class="cp_ipselect">

                                <select name="H" size="1" class="cp_sl06" required>
                                    <option value="" hidden disabled selected></option>
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>

                                <span class="cp_sl06_highlight"></span>
                                <span class="cp_sl06_selectbar"></span>
                                <label class="cp_sl06_selectlabel">H</label>

                            </div>

                            <div class="cp_ipselect">

                                <select name="F" size="1" class="cp_sl06" required>
                                    <option value="" hidden disabled selected></option>
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>

                                <span class="cp_sl06_highlight"></span>
                                <span class="cp_sl06_selectbar"></span>
                                <label class="cp_sl06_selectlabel">F</label>

                            </div>

                            <div class="cp_ipselect">

                                <select name="S" size="1" class="cp_sl06" required>
                                    <option value="" hidden disabled selected></option>
                                    @foreach($kumiren_members as $member)
                                        <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                    @endforeach
                                </select>

                                <span class="cp_sl06_highlight"></span>
                                <span class="cp_sl06_selectbar"></span>
                                <label class="cp_sl06_selectlabel">S</label>

                            </div>

                            -->

                            <div>
                                <label for="H" style="width:75%" class="selectboxlabel">
                                    Headを選択してください。
                                    <select class="js-example-disabled-results" name="H" id="H" style="width:80%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                                <label for="root" style="width:75%" class="selectboxlabel">
                                    根回しを選択してください。
                                    <select class="js-example-disabled-results" name="root" id="root" style="width:80%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                                <label for="F" style="width:75%" class="selectboxlabel">
                                    FirstCallerを選択してください。
                                    <select class="js-example-disabled-results" name="F" id="F" style="width:80%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                                <label for="S" style="width:75%" class="selectboxlabel">
                                    SecondCallerを選択してください。
                                    <select class="js-example-disabled-results" name="S" id="S" style="width:80%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                            </div>









                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                      <button type="submit" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>作成</button>
                                </div>
                            </div>


                        </form>


                        <script>
                            function StaffsCheck(){
                                var StaffsId = [];
                                StaffsId.push($('[name=root]').val());
                                StaffsId.push($('[name=H]').val());
                                StaffsId.push($('[name=F]').val());
                                StaffsId.push($('[name=S]').val());
                                StaffsId.sort();
                                for (var i = 0; i < StaffsId.length - 1; i++) {
                                    if(StaffsId[i]==StaffsId[i+1]){
                                        alert("同じ人が選択されています。");
                                        return false;
                                    }
                                }
                                return true;
                            }
                            $(".js-example-disabled-results").select2();
                        </script>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
