<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Open-admin name
    |--------------------------------------------------------------------------
    |
    | This value is the name of Open-admin, This setting is displayed on the
    | login page.
    |
    */
    'name' => 'SIBPILOT',

    /*
    |--------------------------------------------------------------------------
    | Open-admin logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages. You can also set it as an image by using a
    | `img` tag, eg '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo' => '<img src="https://particuliers.sib.ci/wp-content/uploads/2022/07/SIB_RVB-ENDOSSEMENT-FIR.png" width="90%" height="70px" alt="SIBPILOT Admin logo">',
    'img' => '<img src="https://particuliers.sib.ci/wp-content/uploads/2022/07/SIB_RVB-ENDOSSEMENT-FIR.png" width="90%" height="70px" alt="SIBPILOT Admin logo">',

    /*
    |--------------------------------------------------------------------------
    | Open-admin mini logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages when the sidebar menu is collapsed. You can
    | also set it as an image by using a `img` tag, eg
    |
    */
    'logo-mini' => '<img src="https://wiijob.com/wp-content/uploads/elementor/thumbs/cbao_logo-qoolgapn9n9sql95vtsuvq77yjw1ttch7sugtcseak.png" width="90%" height="50px" alt="SIBPILOT Admin logo-mini">',

    /*
    |--------------------------------------------------------------------------
    | Open-admin bootstrap setting
    |--------------------------------------------------------------------------
    |
    | This value is the path of open-admin bootstrap file.
    |
    */
    'bootstrap' => app_path('Admin/bootstrap.php'),

    /*
    |--------------------------------------------------------------------------
    | Open-admin route settings
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the admin page, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */
    'route' => [

        'prefix' => env('ADMIN_ROUTE_PREFIX', 'admin'),

        'namespace' => 'App\\Admin\\Controllers',

        'middleware' => ['web', 'admin'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Open-admin install directory
    |--------------------------------------------------------------------------
    |
    | The installation directory of the controller and routing configuration
    | files of the administration page. The default is `app/Admin`, which must
    | be set before running `artisan admin::install` to take effect.
    |
    */
    'directory' => app_path('Admin'),

    /*
    |--------------------------------------------------------------------------
    | Open-admin html title
    |--------------------------------------------------------------------------
    |
    | Html title for all pages.
    |
    */
    'title' => 'Admin',

    /*
    |--------------------------------------------------------------------------
    | Access via `https`
    |--------------------------------------------------------------------------
    |
    | If your page is going to be accessed via https, set it to `true`.
    |
    */
    'https' => env('ADMIN_HTTPS', false),

    /*
    |--------------------------------------------------------------------------
    | Open-admin auth setting
    |--------------------------------------------------------------------------
    |
    | Authentication settings for all admin pages. Include an authentication
    | guard and a user provider setting of authentication driver.
    |
    | You can specify a controller for `login` `logout` and other auth routes.
    |
    */
    'auth' => [

        'controller' => App\Admin\Controllers\AuthController::class,

        'guard' => 'admin',

        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admin',
            ],
        ],

        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => OpenAdmin\Admin\Auth\Database\Administrator::class,
            ],
        ],

        // Add "remember me" to login form
        'remember' => true,

        // Redirect to the specified URI when user is not authorized.
        'redirect_to' => 'auth/login',

        // Protect agaist brute force attacks
        'throttle_logins'   => true,
        'throttle_attempts' => 5,
        'throttle_timeout'  => 900, // in seconds

        // The URIs that should be excluded from authorization.
        'excepts' => [
            'auth/login',
            'auth/logout',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Open-admin upload setting
    |--------------------------------------------------------------------------
    |
    | File system configuration for form upload files and images, including
    | disk and upload path.
    |
    */
    'upload' => [

        // Disk in `config/filesystem.php`.
        'disk' => 'admin',

        // Image and file upload path under the disk above.
        'directory' => [
            'image' => 'images',
            'file'  => 'files',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Open-admin database settings
    |--------------------------------------------------------------------------
    |
    | Here are database settings for open-admin builtin model & tables.
    |
    */
    'database' => [

        // Database connection for following tables.
        'connection' => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => OpenAdmin\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => OpenAdmin\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => OpenAdmin\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table' => 'admin_menu',
        'menu_model' => OpenAdmin\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
        'operation_log_table'    => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | User operation log setting
    |--------------------------------------------------------------------------
    |
    | By setting this option to open or close operation log in open-admin.
    |
    */
    'operation_log' => [

        'enable' => true,

        /*
         * Only logging allowed methods in the list
         */
        'allowed_methods' => ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'TRACE', 'PATCH'],

        /*
         * Routes that will not log to database.
         *
         * All method to path like: admin/auth/logs
         * or specific method to path like: get:admin/auth/logs.
         */
        'except' => [
            env('ADMIN_ROUTE_PREFIX', 'admin').'/auth/logs*',
        ],

        /*
         * Replace input fields that should not be logged
         */
        'filter_input' => [
            'token'             => '*****-filtered-out-*****',
            'password'          => '*****-filtered-out-*****',
            'password_remember' => '*****-filtered-out-*****',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Indicates whether to check route permission.
    |--------------------------------------------------------------------------
    */
    'check_route_permission' => true,

    /*
    |--------------------------------------------------------------------------
    | Indicates whether to check menu roles.
    |--------------------------------------------------------------------------
    */
    'check_menu_roles' => true,

    /*
    |--------------------------------------------------------------------------
    | User default avatar
    |--------------------------------------------------------------------------
    |
    | Set a default avatar for newly created users.
    |
    */
    'default_avatar' => '/vendor/open-admin/open-admin/gfx/user.svg',

    /*
    |--------------------------------------------------------------------------
    | Admin map field provider
    |--------------------------------------------------------------------------
    |
    | Supported: "openstreetmaps", "tencent", "google", "yandex".
    |
    */
    'map_provider' => 'openstreetmaps',

    /*
    |--------------------------------------------------------------------------
    | Application Skin
    |--------------------------------------------------------------------------
    |
    | A custom class to overwrite your admin panel looks.
    | The orginal adminlte theme is not used anymore.
    |
    */
    'skin' => 'your-custom-skin-class',

    /*
    |--------------------------------------------------------------------------
    | Application layout
    |--------------------------------------------------------------------------
    |
    | This value is the layout of admin pages.
    |
    | Supported: "fixed", "layout-boxed", "layout-top-nav", "sidebar-collapse",
    | "sidebar-mini".
    |
    */
    'layout' => ['sidebar-mini', 'sidebar-collapse'],

    /*
    |--------------------------------------------------------------------------
    | Login page background image
    |--------------------------------------------------------------------------
    |
    | This value is used to set the background image of login page.
    |
    */
    'login_background_image' => 'https://cdn.pixabay.com/photo/2020/12/06/00/53/background-5807487_1280.png',

    /*
    |--------------------------------------------------------------------------
    | Show version at footer
    |--------------------------------------------------------------------------
    |
    | Whether to display the version number of open-admin at the footer of
    | each page
    |
    */
    'show_version' => true,

    /*
    |--------------------------------------------------------------------------
    | Show environment at footer
    |--------------------------------------------------------------------------
    |
    | Whether to display the environment at the footer of each page
    |
    */
    'show_environment' => true,

    /*
    |--------------------------------------------------------------------------
    | Menu bind to permission
    |--------------------------------------------------------------------------
    |
    | whether enable menu bind to a permission
    */
    'menu_bind_permission' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable default breadcrumb
    |--------------------------------------------------------------------------
    |
    | Whether enable default breadcrumb for every page content.
    */
    'enable_default_breadcrumb' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable assets minify
    |--------------------------------------------------------------------------
    */
    'minify_assets' => [

        // Assets will not be minified.
        'excepts' => [

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable sidebar menu search
    |--------------------------------------------------------------------------
    */
    'enable_menu_search' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable user_panel in sidebar
    |--------------------------------------------------------------------------
    */
    'enable_user_panel' => false,

    /*
    |--------------------------------------------------------------------------
    | Alert message that will displayed on top of the page.
    |--------------------------------------------------------------------------
    */
    'top_alert' => '',

    /*
    |--------------------------------------------------------------------------
    | The global Grid action display class. (Actions::class, DropdownActions:class or ContextMenuActions::class)
    |--------------------------------------------------------------------------
    */
    'grid_action_class' => \OpenAdmin\Admin\Grid\Displayers\Actions\Actions::class,
    // 'grid_action_class' => \OpenAdmin\Admin\Grid\Displayers\Actions\DropdownActions::class,
    // 'grid_action_class' => \OpenAdmin\Admin\Grid\Displayers\Actions\ContextMenuActions::class,

    /*
    |--------------------------------------------------------------------------
    | Extension Directory
    |--------------------------------------------------------------------------
    |
    | When you use command `php artisan admin:extend` to generate extensions,
    | the extension files will be generated in this directory.
    */
    'extension_dir' => app_path('Admin/Extensions'),

    /*
    |--------------------------------------------------------------------------
    | Settings for extensions.
    |--------------------------------------------------------------------------
    |
    | You can find all available extensions here
    | https://github.com/open-admin-extensions.
    |
    */
    'extensions' => [
        // 'log-viewer' => [
        //     'bypass_protected_urls' => true,
        //     //'bypass_protected_urls_find' => ['.'],          // default ['.']
        //     //'bypass_protected_urls_replace' => ['[dot]'],   // default ['[dot]']
        // ]

        'api-tester' => [

            // route prefix for APIs
            'prefix' => 'api',

            // auth guard for api
            'guard'  => 'api',

            // If you are not using the default user model as the authentication model, set it up
            'user_retriever' => function ($id) {
                return \App\User::find($id);
            },
        ]
    ]
];

