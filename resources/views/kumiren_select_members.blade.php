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
                        <form method="post" action="{{url('/kumiren/'.$kumiren->id.'/select_members/select_staffs')}}">
                            @csrf



                            <div class="select-members-part">
                                <input type="checkbox" name="checkbox" id="cp_menu_bar1" class="accordion" />
                                <label  class="grade-male-label" for="cp_menu_bar1">6回生</label>
                                <ul id="link1">
                                    <li><label class="grade6-male" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade6-male-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                @if($member->sex == "male")
                                                    <li>
                                                        <label class="grade6-male">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar2" class="accordion" />
                                <label class="grade-male-label" for="cp_menu_bar2">5回生</label>
                                <ul id="link2">
                                    <li><label class="grade5-male" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade5-male-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                @if($member->sex == "male")
                                                    <li>
                                                        <label class="grade5-male">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar3" class="accordion" />
                                <label class="grade-male-label"for="cp_menu_bar3">4回生</label>
                                <ul id="link3">
                                    <li><label class="grade4-male" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade4-male-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                @if($member->sex == "male")
                                                    <li>
                                                        <label class="grade4-male">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar4" class="accordion" />
                                <label class="grade-male-label"for="cp_menu_bar4">3回生</label>
                                <ul id="link4">
                                    <li><label class="grade3-male" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade3-male-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                @if($member->sex == "male")
                                                    <li>
                                                        <label class="grade3-male">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>


                                <input type="checkbox" name="checkbox" id="cp_menu_bar5" class="accordion" />
                                <label class="grade-male-label" for="cp_menu_bar5">2回生</label>
                                <ul id="link5">
                                    <li><label class="grade2-male" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade2-male-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                @if($member->sex == "male")
                                                    <li>
                                                        <label class="grade2-male">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar6" class="accordion" />
                                <label class="grade-male-label" for="cp_menu_bar6">1回生</label>
                                <ul id="link6">
                                    <li><label class="grade1-male" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade1-male-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                @if($member->sex == "male")
                                                    <li>
                                                        <label class="grade1-male">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                            </div>
                            <div class="select-members-part">
                                <input type="checkbox" name="checkbox" id="cp_menu_bar7" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar7">6回生</label>
                                <ul id="link7">
                                    <li><label class="grade6-female" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade6-female-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 6)
                                                @if($member->sex == "female")
                                                    <li>
                                                        <label class="grade6-female">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar8" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar8">5回生</label>
                                <ul id="link8">
                                    <li><label class="grade5-female" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade5-female-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 5)
                                                @if($member->sex == "female")
                                                    <li>
                                                        <label class="grade5-female">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar9" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar9">4回生</label>
                                <ul id="link9">
                                    <li><label class="grade4-female" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade4-female-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 4)
                                                @if($member->sex == "female")
                                                    <li>
                                                        <label class="grade4-female">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar10" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar10">3回生</label>
                                <ul id="link10">
                                    <li><label class="grade3-female" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade3-female-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 3)
                                                @if($member->sex == "female")
                                                    <li>
                                                        <label class="grade3-female">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>

                                <input type="checkbox" name="checkbox" id="cp_menu_bar11" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar11">2回生</label>
                                <ul id="link11">
                                    <li><label class="grade2-female" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade2-female-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 2)
                                                @if($member->sex == "female")
                                                    <li>
                                                        <label class="grade2-female">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>


                                <input type="checkbox" name="checkbox" id="cp_menu_bar12" class="accordion" />
                                <label  class="grade-female-label" for="cp_menu_bar12">1回生</label>
                                <ul id="link12">
                                    <li><label class="grade1-female" for="all"><input type="checkbox" name="allChecked" id="all">全選択</label></li>
                                    <div id="grade1-female-members">
                                        @foreach($members as $member)
                                            @if($fiscal_year - $member->enrollment_year + 1 == 1)
                                                @if($member->sex == "female")
                                                    <li>
                                                        <label class="grade1-female">
                                                            <input type="checkbox" name="selectedMember[]" value="<?php echo $member->id;?>">
                                                            <?php echo $member->last_name;?>
                                                        </label>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </ul>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                      <button type="submit" class="btn btn-default"><i class="fa fa-btn fa-plus"></i>次へ</button>
                                </div>
                            </div>

                            <script>
                            $(function() {
                                //6回生用の全選択ボタン
                                $('.grade6-male #all').on('click', function() {
                                  $(".grade6-male > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade6-male > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade6-male-members :checked').length == $('#grade6-male-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade6-male #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade6-male #all').prop('checked', false);
                                  }
                                });


                                //五回生用の全選択ボタン
                                $('.grade5-male #all').on('click', function() {
                                  $(".grade5-male > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade5-male > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade5-male-members :checked').length == $('#grade5-male-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade5-male #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade5-male #all').prop('checked', false);
                                  }
                                });



                                //四回生用の全選択ボタン
                                $('.grade4-male #all').on('click', function() {
                                  $(".grade4-male > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade4-male > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade4-male-members :checked').length == $('#grade4-male-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade4-male #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade4-male #all').prop('checked', false);
                                  }
                                });


                                //三回生用の全選択ボタン
                                $('.grade3-male #all').on('click', function() {
                                  $(".grade3-male > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade3-male > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade3-male-members :checked').length == $('#grade3-male-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade3-male #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade3-male #all').prop('checked', false);
                                  }
                                });

                                //三回生用の全選択ボタン
                                $('.grade2-male #all').on('click', function() {
                                  $(".grade2-male > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade2-male > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade2-male-members :checked').length == $('#grade2-male-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade2-male #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade2-male #all').prop('checked', false);
                                  }
                                });

                                $('.grade1-male #all').on('click', function() {
                                  $(".grade1-male > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade1-male > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade1-male-members :checked').length == $('#grade1-male-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade1-male #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade1-male #all').prop('checked', false);
                                  }
                                });

                                ////////////////////////////////////////////////////////////////////////////////

                                $('.grade6-female #all').on('click', function() {
                                  $(".grade6-female > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade6-female > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade6-female-members :checked').length == $('#grade6-female-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade6-female #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade6-female #all').prop('checked', false);
                                  }
                                });


                                $('.grade5-female #all').on('click', function() {
                                  $(".grade5-female > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade5-female > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade5-female-members :checked').length == $('#grade5-female-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade5-female #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade5-female #all').prop('checked', false);
                                  }
                                });



                                $('.grade4-female #all').on('click', function() {
                                  $(".grade4-female > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade4-female > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade4-female-members :checked').length == $('#grade4-female-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade4-female #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade4-female #all').prop('checked', false);
                                  }
                                });



                                $('.grade3-female #all').on('click', function() {
                                  $(".grade3-female > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade3-female > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade3-female-members :checked').length == $('#grade3-female-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade3-female #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade3-female #all').prop('checked', false);
                                  }
                                });



                                $('.grade2-female #all').on('click', function() {
                                  $(".grade2-female > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade2-female > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade2-female-members :checked').length == $('#grade2-female-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade2-female #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade2-female #all').prop('checked', false);
                                  }
                                });


                                $('.grade1-female #all').on('click', function() {
                                  $(".grade1-female > input[name='selectedMember[]']").prop('checked', this.checked);
                                });

                                $(".grade1-female > input[name='selectedMember[]']").on('click', function() {
                                  if ($('#grade1-female-members :checked').length == $('#grade1-female-members :input').length) {
                                    // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
                                    $('.grade1-female #all').prop('checked', true);
                                  } else {
                                    // 1つでもチェックが入っていたら、「全選択」 = checked
                                    $('.grade1-female #all').prop('checked', false);
                                  }
                                });



                            });
                            </script>


                        </form>



                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
