<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class DriveController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Drives'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\Drive");
        $this->crud->setRoute("admin/Drives");
        $this->crud->setEntityNameStrings('Drive', 'Drives');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('from',[
            'label' => "From",
            'type' => "select",
            'name' => 'from',
            'entity' => 'locationFrom',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->setColumnDetails('to',[
            'label' => "To",
            'type' => "select",
            'name' => 'to',
            'entity' => 'locationTo',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->setColumnDetails('price',[
            'label' => "Price",
            'name' => 'price',
            'type' => "text",
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "From",
            'type' => "relationship",
            'name' => 'from',
            'entity' => 'locationFrom',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addField([
            'label' => "To",
            'type' => "relationship",
            'name' => 'to',
            'entity' => 'locationTo',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addField(['name' => 'price', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "From",
            'type' => "relationship",
            'name' => 'from',
            'entity' => 'locationFrom',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addField([
            'label' => "To",
            'type' => "relationship",
            'name' => 'to',
            'entity' => 'locationTo',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addField(['name' => 'price', 'type' => 'text']);
    }
}
