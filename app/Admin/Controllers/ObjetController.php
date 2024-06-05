<?php

namespace App\Admin\Controllers;

use App\Models\Objet;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Admin\Actions\Replicate;
use OpenAdmin\Admin\Widgets\Table;


class ObjetController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Objet';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Objet);

        // $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Titre'))->width(600);

        $grid->column('libelle', __('Libellé'))->help('Voici le Libellé ');
        $grid->sortable();
        $grid->actions(function ($actions) {
            $actions->add(new Replicate());
        });

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
        $show = new Show(Objet::findOrFail($id));

        // $show->field('id', __('ID'));
        $show->field('title', __('Titre'));
        $show->field('libelle', __('Libellé'));
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
        $form = new Form(new Objet);

        // $form->display('id', __('ID'));
        $form->text('title', __('Titre'));
        $form->textarea('libelle', __('Libellé'));
        // $form->display('created_at', __('Created At'));
        // $form->display('updated_at', __('Updated At'));

        return $form;

    }
}
