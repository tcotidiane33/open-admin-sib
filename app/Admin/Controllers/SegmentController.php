<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Segment;

class SegmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Les segments';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Segment());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code du segment'));
        $grid->column('name', __('Intitulé du segment'));
        $grid->column('created_at', __('Created at'));
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
        $show = new Show(Segment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('code', __('Code du segment'));
        $show->field('name', __('Intitulé du segment'));
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
        $form = new Form(new Segment());

        $form->text('code', __('Code du segment'));
        $form->textarea('name', __('Intitulé du segment'));

        return $form;
    }
}
