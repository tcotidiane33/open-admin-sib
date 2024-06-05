<?php

namespace App\Admin\Controllers;

use App\Models\CodeOperateur;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class CodeOperateurController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Les codes opérateurs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CodeOperateur);

        // $grid->column('id', __('ID'))->sortable();
        $grid->column('Rubrique', __('Rubrique'));
        $grid->column('CodeOperation', __('Code opération'));
        $grid->column('Libelle', __('Libellé'));
        $grid->sortable();
        // $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(CodeOperateur::findOrFail($id));

        // $show->field('id', __('ID'));
        $show->field('Rubrique', __('Rubrique'));
        $show->field('CodeOperation', __('Code opération'));
        $show->field('Libelle', __('Libellé'));
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
        $form = new Form(new CodeOperateur());

        // $form->display('id', __('ID'));
        $form->text('Rubrique', __('Rubrique'));
        $form->number('CodeOperation', __('Code opération'));
        $form->textarea('Libelle', __('Libellé'));
        // $form->display('created_at', __('Created At'));
        // $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
