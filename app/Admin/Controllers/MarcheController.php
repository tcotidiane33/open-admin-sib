<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Marche;

class MarcheController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Les marchés';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Marche());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code du marché'));
        $grid->column('name', __('Nom du marché'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Marche::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('code', __('Code du marché'));
        $show->field('name', __('Nom du marché'));
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
        $form = new Form(new Marche());

        $form->text('code', __('Code du marché'));
        $form->textarea('name', __('Nom du marché'));

        return $form;
    }
}
