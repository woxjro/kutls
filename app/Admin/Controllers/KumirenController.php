<?php

namespace App\Admin\Controllers;

use App\Kumiren;
use App\Kumiren2member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KumirenController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Kumiren';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kumiren());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->Kumiren2members('Kumiren to Members')->display(function ($kumiren2members) {
            $count = count($kumiren2members);
            return "<span class='label label-warning'>{$count}</span>";
        });

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
        $show = new Show(Kumiren::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->Kumiren2members('Kumiren to Members', function ($kumiren2members) {
            $kumiren2members->resource('/admin/auth/kumiren2members');
            $kumiren2members->id();
            $kumiren2members->member_id();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Kumiren());

        $form->text('name', __('Name'));

        return $form;
    }
}
