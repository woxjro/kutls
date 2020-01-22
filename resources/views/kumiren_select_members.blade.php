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
                        <form method="post" action="{{url('/kumiren/select_members/select_staffs')}}">
                            @csrf



                            <div class="select-members-part">
                                <input type="checkbox" name="checkbox" id="cp_menu_bar1" class="accordion" />
                                <label  class="grade-male-label" for="cp_menu_bar1">6回生</label>
                                <ul id="link1">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                            @if($member->sex == "male")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar2" class="accordion" />
                                <label class="grade-male-label" for="cp_menu_bar2">5回生</label>
                                <ul id="link2">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                            @if($member->sex == "male")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar3" class="accordion" />
                                <label class="grade-male-label"for="cp_menu_bar3">4回生</label>
                                <ul id="link3">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                            @if($member->sex == "male")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar4" class="accordion" />
                                <label class="grade-male-label"for="cp_menu_bar4">3回生</label>
                                <ul id="link4">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                            @if($member->sex == "male")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar5" class="accordion" />
                                <label class="grade-male-label" for="cp_menu_bar5">2回生</label>
                                <ul id="link5">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                            @if($member->sex == "male")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar6" class="accordion" />
                                <label class="grade-male-label" for="cp_menu_bar6">1回生</label>
                                <ul id="link6">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                            @if($member->sex == "male")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                            </div>
                            <div class="select-members-part">
                                <input type="checkbox" name="checkbox" id="cp_menu_bar7" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar7">6回生</label>
                                <ul id="link7">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                            @if($member->sex == "female")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar8" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar8">5回生</label>
                                <ul id="link8">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                            @if($member->sex == "female")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar9" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar9">4回生</label>
                                <ul id="link9">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                            @if($member->sex == "female")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar10" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar10">3回生</label>
                                <ul id="link10">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                            @if($member->sex == "female")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar11" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar11">2回生</label>
                                <ul id="link11">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                            @if($member->sex == "female")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>


                                <input type="checkbox" name="checkbox" id="cp_menu_bar12" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar12">1回生</label>
                                <ul id="link12">
                                    @foreach($members as $member)
                                        @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                            @if($member->sex == "female")
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                        <?php echo $member->last_name;?>
                                                    </label>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                      <button type="submit" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>次へ</button>
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
