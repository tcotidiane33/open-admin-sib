<?php

namespace App\Admin\Controllers;

use App\Models\Segment;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Unitcommercial;
use App\Models\AffectationPortefeuille;
use OpenAdmin\Admin\Controllers\AdminController;

class AffectationPortefeuilleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Affectation de Portefeuille';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AffectationPortefeuille());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('code', __('Portefeuille'))->sortable();
        $grid->column('unitcommercial_id', __('Unit Commercial'))->display(function($unitcommercial_id) {
            return Unitcommercial::find($unitcommercial_id)->name;
        });
        $grid->column('segment_id', __('Segment'))->display(function($segment_id) {
            return Segment::find($segment_id)->name;
        });
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
        $show = new Show(AffectationPortefeuille::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('code', __('Portefeuille'));
        $show->field('unitcommercial.name', __('Unit Commercial'));
        $show->field('segment.name', __('Segment'));
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
        $form = new Form(new AffectationPortefeuille());

        $form->display('id', __('ID'));
        $form->number('code', __('Portefeuille'));
        $form->select('unitcommercial_id', __('Unit Commercial'))->options(function() {
            return Unitcommercial::all()->pluck('name', 'id');
        });
        $form->select('segment_id', __('Segment'))->options(function() {
            return Segment::all()->pluck('name', 'id');
        });
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
