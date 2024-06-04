<?php

namespace App\Admin\Actions;

use Illuminate\Database\Eloquent\Model;
use OpenAdmin\Admin\Actions\RowAction;

class Replicate extends RowAction
{
    public $name = 'copy';

    public $icon = 'icon-copy';

    public function handle(Model $model)
    {
        // Here the model's `replicate` method is called to copy the data, then call the `save` method to save it.
        $model->replicate()->save();

        // return a success message with the content "copy success" and refresh the page
        return $this->response()->success('copy success.')->refresh();
    }

    public function dialog()
    {
        $this->question('Are you sure to copy this row?', 'This will copy all the data into a new entity', ['icon'=>'question','confirmButtonText'=>'Yes']);
    }

}
