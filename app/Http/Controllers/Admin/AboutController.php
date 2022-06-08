<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\About\UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class AboutController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage About'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\About");
        $this->crud->setRoute("admin/About");
        $this->crud->setEntityNameStrings('About', 'About');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->addButtonFromView('line', 'show_about_text', 'showAboutText');
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(UpdateRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);
    }
}
