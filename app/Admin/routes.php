<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/infos', 'HomeController@infos')->name('infos');

// parametrages
    $router->resource('budgets', BudgetController::class);  // Correction ici
    $router->resource('UnitCommercial', UcommercialController::class);  // Correction ici
    $router->resource('segments', SegmentController::class);  // Correction ici
    $router->resource('marches', MarcheController::class);  // Correction ici
    $router->resource('rubriqueComptable', RubriqueComptableController::class);  // Correction ici
    $router->resource('codeOperateurs', CodeOperateurController::class);  // Correction ici
    $router->resource('affectationsPortefeuilles', AffectationPortefeuilleController::class);  // Correction ici

});
