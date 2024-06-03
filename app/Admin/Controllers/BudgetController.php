<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Budget;

class BudgetController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Budget';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Budget());

        // $grid->column('id', __('Id'));
        $grid->column('Ges', __('Gestionnaires'));
        $grid->column('Rubrique', __('Rubrique'));
        $grid->column('Mois', __('Mois'));
        $grid->column('Budget', __('Budget'));
        // $grid->column('created_at', __('Created at'));
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
        $show = new Show(Budget::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('Ges', __('Gestionnaires'));
        $show->field('Rubrique', __('Rubrique'));
        $show->field('Mois', __('Mois'));
        $show->field('Budget', __('Budget'));
        // $show->field('created_at', __('Created at'));
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
        $form = new Form(new Budget());

        $form->number('Ges', __('Gestionnaires'));
        $form->textarea('Rubrique', __('Rubrique'));
        $form->date('Mois', __('Mois'));
        $form->number('Budget', __('Budget'));

        return $form;
    }
}
