<?php

namespace App\Admin\Controllers;

use App\Models\Relation;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use OpenAdmin\Admin\Controllers\AdminController;
use App\Admin\Actions\Replicate;

class RelationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Relations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Relation());

        // $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Titre'));
        $grid->column('libelle', __('Libellé'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Relation::findOrFail($id));

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
        $form = new Form(new Relation());

        // $form->integer('id', __('ID'));
        $form->text('title', __('Titre'));
        $form->textarea('libelle', __('Libellé'));
        $form->timestamp('created_at', __('Created At'));
        $form->timestamp('updated_at', __('Updated At'));

        return $form;
    }
}
