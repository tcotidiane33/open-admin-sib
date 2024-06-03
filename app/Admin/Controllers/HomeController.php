<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        $admin = new Admin(); // Créez une instance de la classe Admin

        return $admin->content(function (Content $content) {

            // optional
            $content->header('Tableau de bord');

            // optional
            $content->description('Sibpilot');

            // // breadcrumb option
            // $content->breadcrumb(
            //     ['text' => 'Dashboard', 'url' => '/admin'],
            //     ['text' => 'User management', 'url' => '/admin/users'],
            //     ['text' => 'Edit user']
            // );

            // // Fill the page body part, you can put any renderable objects here
            // $content->body('hello world');

            // // Add another contents into body
            // $content->body('foo bar');

            // // method `row` is alias for `body`
            // $content->row('hello world');

            // // Direct rendering view, Since v1.6.12
            // $content->view('dashboard', ['data' => 'foo']);
        });
    }


    public function infos(Content $content)
    {
        $admin = new Admin(); // Créez une instance de la classe Admin

        return $admin->content(function (Content $content) {
            $content
                ->css_file(Admin::asset("open-admin/css/pages/dashboard.css"))
                ->title('Dashboard')
                ->description('Description...')
                ->row(Dashboard::title())
                ->row(function (Row $row) {

                    $row->column(4, function (Column $column) {
                        $column->append(Dashboard::environment());
                    });

                    $row->column(4, function (Column $column) {
                        $column->append(Dashboard::extensions());
                    });

                    $row->column(4, function (Column $column) {
                        $column->append(Dashboard::dependencies());
                    });
                });
        });
    }
}
