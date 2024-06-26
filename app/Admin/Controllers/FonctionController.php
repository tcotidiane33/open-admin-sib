<?php

namespace App\Admin\Controllers;

use App\Models\Fonction;
use App\Models\Statut;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Admin\Actions\Replicate;
use OpenAdmin\Admin\Widgets\Table;


class FonctionController extends AdminController
{
    /**
     * name for current resource.
     *
     * @var string
     */
    protected $name = 'Fonctions du Système';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Fonction);

        // $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Titre'))->width(600);
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
        $show = new Show(Fonction::findOrFail($id));

        // $show->field('id', __('ID'));
        $show->field('name', __('Titre'));
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
        $form = new Form(new Fonction);

        // $form->display('id', __('ID'));
        $form->text('name', __('Titre'));
        // $form->display('created_at', __('Created At'));
        // $form->display('updated_at', __('Updated At'));

        return $form;

    }
}
