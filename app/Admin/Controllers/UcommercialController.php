<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Unitcommercial;

class UcommercialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Unité Commerciale';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Unitcommercial());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code unité commerciale'));
        $grid->column('name', __('Nom unité commerciale'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));
        $grid->sortable();
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
        $show = new Show(Unitcommercial::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('code', __('Code unité commerciale'));
        $show->field('name', __('Nom unité commerciale'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Unitcommercial());

        $form->text('code', __('Code unité commerciale'));
        $form->textarea('name', __('Nom unité commerciale'));

        return $form;
    }
}
