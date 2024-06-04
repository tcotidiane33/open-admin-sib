<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Portefeuille;
use OpenAdmin\Admin\Controllers\AdminController;
use App\Admin\Actions\Replicate;


class PortefeuilleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Portefeuilles';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Portefeuille);

        // $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Titre'));
        $grid->column('libelle', __('Libellé'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Portefeuille::findOrFail($id));

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
        $form = new Form(new Portefeuille);

        // $form->display('id', __('ID'));
        $form->text('title', __('Titre'));
        $form->textarea('libelle', __('Libellé'));
        // $form->display('created_at', __('Created At'));
        // $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
