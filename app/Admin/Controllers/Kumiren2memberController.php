<?php

namespace App\Admin\Controllers;

use App\Kumiren2member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Kumiren2memberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Kumiren2member';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kumiren2member());

        $grid->column('id', __('Id'));
        $grid->column('kumiren_id', __('Kumiren id'));
        $grid->column('role', __('Role'));
        $grid->column('member_id', __('Member id'));
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
        $show = new Show(Kumiren2member::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kumiren_id', __('Kumiren id'));
        $show->field('role', __('Role'));
        $show->field('member_id', __('Member id'));
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
        $form = new Form(new Kumiren2member());

        $form->number('kumiren_id', __('Kumiren id'));
        $form->text('role', __('Role'));
        $form->number('member_id', __('Member id'));

        return $form;
    }
}
