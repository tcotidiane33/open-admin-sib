<?php

namespace App\Admin\Controllers;

use App\Models\User;
use App\Models\Marche;
use App\Models\Fonction;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Portefeuille;
use App\Models\Unitcommercial;
use OpenAdmin\Admin\Controllers\AdminController;

class UserController extends AdminController
{
    protected $title = 'Users';

    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Nom et Prénom'));
        $grid->column('username', __('Nom d\'utilisateur'));
        $grid->column('marche_id', __('Marché'))->display(function ($marche_id) {
            return Marche::find($marche_id)->code;
        });
        $grid->column('fonction_id', __('Fonction'))->display(function ($fonction_id) {
            return Fonction::find($fonction_id)->name;
        });
        $grid->column('portefeuille_id', __('Portefeuille'))->display(function ($portefeuille_id) {
            return Portefeuille::find($portefeuille_id)->title;
        });
        $grid->column('unitcommercial_id', __('Unité Commerciale'))->display(function ($unitcommercial_id) {
            return Unitcommercial::find($unitcommercial_id)->code;
        });
        $grid->column('superieur_id', __('Supérieur Hiérarchique'))->display(function ($superieur_id) {
            return $superieur_id ? User::find($superieur_id)->name : '-';
        });
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Téléphone'));
        $grid->column('password', __('Password'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->sortable();
        return $grid;
    }


    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Nom et Prénom'));
        $show->field('username', __('Nom d\'utilisateur'));

        $show->field('marche_id', __('Marché'))->as(function ($marche_id) {
            return Marche::find($marche_id)->code ?? '-';
        });

        $show->field('fonction_id', __('Fonction'))->as(function ($fonction_id) {
            return Fonction::find($fonction_id)->name ?? '-';
        });

        $show->field('portefeuille_id', __('Portefeuille'))->as(function ($portefeuille_id) {
            return Portefeuille::find($portefeuille_id)->title ?? '-';
        });

        $show->field('unitcommercial_id', __('Unité Commerciale'))->as(function ($unitcommercial_id) {
            return UnitCommercial::find($unitcommercial_id)->code ?? '-';
        });
        $show->field('superieur_id', __('Supérieur Hiérarchique'))->as(function ($superieur_id) {
            return $superieur_id ? User::find($superieur_id)->name : '-';
        });
        $show->field('email', __('Email'));
        $show->field('phone', __('Téléphone'));
        $show->field('password', __('Password'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Nom et Prénom'));
        $form->text('username', __('Nom d\'utilisateur'));
        $form->select('marche_id', __('Marché'))->options(function () {
            // Récupérez la liste des marchés disponibles depuis votre modèle Marche
            return \App\Models\Marche::pluck('code', 'id');
        });
        $form->select('fonction_id', __('Fonction'))->options(function () {
            // Récupérez la liste des fonctions disponibles depuis votre modèle Fonction
            return \App\Models\Fonction::pluck('name', 'id');
        });
        $form->select('portefeuille_id', __('Portefeuille'))->options(function () {
            // Récupérez la liste des portefeuilles disponibles depuis votre modèle Portefeuille
            return \App\Models\Portefeuille::pluck('title', 'id');
        });
        $form->select('unitcommercial_id', __('Unité Commerciale'))->options(function () {
            // Récupérez la liste des unités commerciales disponibles depuis votre modèle Unitcommercial
            return \App\Models\Unitcommercial::pluck('code', 'id');
        });
        $form->select('superieur_id', __('Supérieur Hiérarchique'))->options(function () {
            return User::pluck('name', 'id');
        });
        $form->text('email', __('Email'));
        $form->text('phone', __('Téléphone'));
        $form->textarea('password', __('Password'));


        return $form;
    }
}
