@extends('layouts.kumiren_staffs_layout')

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

                        <form method="post" class="select_staffs_form" action="{{url('/kumiren/'.$kumiren->id.'/select_members/select_staffs/result')}}">
                            @csrf
                            <?php $sex = [
                                "male" => "男性",
                                "female" => "女性",
                            ]?>

                            <div>
                                <label for="H" style="width:75%" class="selectboxlabel">
                                    Headを選択してください。
                                    <select class="selectbox4staffs" name="H" id="H" style="width:100%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                                <label for="root" style="width:75%" class="selectboxlabel">
                                    根回しを選択してください。
                                    <select class="selectbox4staffs" name="root" id="root" style="width:100%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                                <label for="F" style="width:75%" class="selectboxlabel">
                                    FirstCallerを選択してください。
                                    <select class="selectbox4staffs" name="F" id="F" style="width:100%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                                <label for="S" style="width:75%" class="selectboxlabel">
                                    SecondCallerを選択してください。
                                    <select class="selectbox4staffs" name="S" id="S" style="width:100%">
                                        <option value="" hidden disabled selected></option>
                                        <optgroup label="6回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="5回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="4回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="3回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="2回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="1回生">
                                            @foreach($kumiren_members as $member)
                                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                    <?php echo '<option value="'.$member->id.'">'.$sex[$member->sex]."：".$member->last_name.'</option>'; ?>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                </label>

                            </div>









                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                      <button type="button" class="btn btn-default" id="staffsbutton"><i class="fa fa-btn fa-plus"></i>作成</button>
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
                                        return false;
                                    }
                                }
                                return true;
                            }
                            function countStaffs(){
                                var StaffsId = [];
                                StaffsId.push($('[name=root]').val());
                                StaffsId.push($('[name=H]').val());
                                StaffsId.push($('[name=F]').val());
                                StaffsId.push($('[name=S]').val());

                            }
                            $(".selectbox4staffs").select2();

                            $('#staffsbutton').click(function(){
                                if(StaffsCheck()){
                                    $('.select_staffs_form').submit();
                                }else if ($('[name=root]').val()==null || $('[name=H]').val()==null || $('[name=F]').val()==null || $('[name=S]').val()==null) {
                                    Swal.fire({
                                        title: '全ての役職を埋めてください。',
                                        text: "選択しなおしてください。",
                                        icon: 'error',
                                        confirmButtonText: '戻る',
                                        showCloseButton: true,
                                    })
                                }else{
                                    Swal.fire({
                                        title: '同じ人が選択されています。',
                                        text: "選択しなおしてください。",
                                        icon: 'error',
                                        confirmButtonText: '戻る',
                                        showCloseButton: true,
                                    })
                                }
                            });

                        </script>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
