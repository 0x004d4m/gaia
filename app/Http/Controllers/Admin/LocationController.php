<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Location\CreateRequest;
use App\Http\Requests\Admin\Location\UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class LocationController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Locations'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\Location");
        $this->crud->setRoute("admin/Locations");
        $this->crud->setEntityNameStrings('Location', 'Locations');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => 'name',
            'type' => "text",
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CreateRequest::class);

        $this->crud->addField(['name' => 'name', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(UpdateRequest::class);

        $this->crud->addField(['name' => 'name', 'type' => 'text']);
    }
}
