<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ProgramImageController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Programs'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\ProgramImage");
        $this->crud->setRoute("admin/ProgramImage");
        $this->crud->setEntityNameStrings('Program Image', 'Program Images');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->removeColumns(['program_id']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);

        $this->crud->addField([
            'label' => "Program",
            'type' => "relationship",
            'name' => 'program_id',
            'entity' => 'program',
            'attribute' => "price",
            'model' => 'App\Models\Program',
            'default' => $_GET['program_id'] ?? null
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

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

        $this->crud->removeColumns(['program_id']);
    }
}
