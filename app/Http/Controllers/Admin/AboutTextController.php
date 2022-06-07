<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class AboutTextController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage About'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\AboutText");
        $this->crud->setRoute("admin/AboutText");
        $this->crud->setEntityNameStrings('About Text', 'About Texts');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();
        // language_id
        // about_id
        // text
        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'text'
        ]);
        $this->crud->setColumnDetails('station_id',[
            'label' => "Station",
            'type' => "select",
            'name' => 'station_id',
            'entity' => 'station',
            'attribute' => "name_en",
            'model' => 'App\Models\Station'
        ]);
        $this->crud->addField([
            'label' => "Station",
            'type' => "relationship",
            'name' => 'station_id',
            'entity' => 'station',
            'attribute' => "name_en",
            'model' => 'App\Models\Station',
            'allows_null' => true
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CreateRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(UpdateRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }
}
