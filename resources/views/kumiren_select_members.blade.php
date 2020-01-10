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
                    <div class="cp_menu">

                        <label  for="cp_menu_bar1">6回生</label>
                        <input type="checkbox" name="checkbox" id="cp_menu_bar1" class="accordion" />
                        <ul id="link1">
                            @foreach($members as $member)
                                @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                    <li>
                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                        <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                    </li>
                                @endif
                            @endforeach
                        </ul>


                        <label for="cp_menu_bar2">5回生</label>
                        <input type="checkbox" name="checkbox" id="cp_menu_bar2" class="accordion" />
                        <ul id="link2">
                            @foreach($members as $member)
                                @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                    <li>
                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                        <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                    </li>
                                @endif
                            @endforeach
                        </ul>


                        <label for="cp_menu_bar3">4回生</label>
                        <input type="checkbox" name="checkbox" id="cp_menu_bar3" class="accordion" />
                        <ul id="link3">
                            @foreach($members as $member)
                                @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                    <li>
                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                        <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                    </li>
                                @endif
                            @endforeach
                        </ul>


                        <label for="cp_menu_bar4">3回生</label>
                        <input type="checkbox" name="checkbox" id="cp_menu_bar4" class="accordion" />
                        <ul id="link4">
                            @foreach($members as $member)
                                @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                    <li>
                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                        <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                    </li>
                                @endif
                            @endforeach
                        </ul>


                        <label for="cp_menu_bar5">2回生</label>
                        <input type="checkbox" name="checkbox" id="cp_menu_bar5" class="accordion" />
                        <ul id="link5">
                            @foreach($members as $member)
                                @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                    <li>
                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                        <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                    </li>
                                @endif
                            @endforeach
                        </ul>


                        <label for="cp_menu_bar6">1回生</label>
                        <input type="checkbox" name="checkbox" id="cp_menu_bar6" class="accordion" />
                        <ul id="link6">
                            @foreach($members as $member)
                                @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                    <li>
                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                        <?php echo ($fiscal_year - $member->enrollment_year + 1)."回生：".$sex[$member->sex]."：".$member->last_name;?>
                                    </li>
                                @endif
                            @endforeach
                        </ul>


                    </div>

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
