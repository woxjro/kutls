<?php

namespace App\Admin\Controllers;

use App\Member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Member';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Member());

        $grid->column('id', __('Id'));
        $grid->column('enrollment_year', __('入学年'));
        $grid->column('sex', __('性別'));
        $grid->column('last_name', __('名字'));
        $grid->column('first_name', __('名前'));
        $grid->column('level', __('レベル'));
        $grid->column('experience', __('経験or未経験'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Member::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('enrollment_year', __('入学年'));
        $show->field('sex', __('性別'));
        $show->field('last_name', __('名字'));
        $show->field('first_name', __('名前'));
        $show->field('level', __('レベル'));
        $show->field('experience', __('経験or未経験'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $sex = [
            'male'  => '男性',
            'female' => '女性',
        ];
        $experience = [
            'experience'  => '経験',
            'inexperience' => '未経験',
        ];

        $form = new Form(new Member());

        $form->number('enrollment_year', __('入学年'))->max(2030)->min(2000)->value(2019);
        $form->radio('sex', __('性別'))->options($sex);
        $form->text('last_name', __('名字'))->value('未記入');
        $form->text('first_name', __('名前'))->value('未記入');
        $form->number('level', __('レベル'))->value(40);
        $form->radio('experience', __('経験or未経験'))->options($experience);

        return $form;
    }
}
