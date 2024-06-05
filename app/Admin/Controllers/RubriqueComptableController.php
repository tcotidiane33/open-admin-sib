<?php

namespace App\Admin\Controllers;

use App\Models\RubriqueComptable;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class RubriqueComptableController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Les Rubriques Comptables';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new RubriqueComptable());

        // $grid->column('id', __('ID'))->sortable();
        $grid->column('Rubrique', __('Rubrique'));
        $grid->column('NumeroChapComp', __('Numéro chapitre comptable'));
        $grid->column('LibelleChapComp', __('Libellé chapitre comptable'));
        // $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->sortable();
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
        $show = new Show(RubriqueComptable::findOrFail($id));

        // $show->field('id', __('ID'));
        $show->field('Rubrique', __('Rubrique'));
        $show->field('NumeroChapComp', __('Numéro chapitre comptable'));
        $show->field('LibelleChapComp', __('Libellé chapitre comptable'));
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
        $form = new Form(new RubriqueComptable());

        // $form->display('id', __('ID'));
        $form->text('Rubrique', __('Rubrique'));
        $form->number('NumeroChapComp', __('Numéro chapitre comptable'));
        $form->textarea('LibelleChapComp', __('Libellé chapitre comptable'));
        // $form->display('created_at', __('Created At'));
        // $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
