<?php

namespace App\Admin\Actions;

use OpenAdmin\Admin\Actions\RowAction;

class ViewComments extends RowAction
{
    public $name = 'View comments';

    public $icon = 'icon-comments';

    /**
     * @return  string
     */
    public function href()
    {
        return "/your/uri/path";
    }
}
