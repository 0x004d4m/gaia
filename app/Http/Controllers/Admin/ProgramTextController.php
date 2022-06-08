<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ProgramTextController extends CrudController
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
        $this->crud->setModel("App\Models\ProgramText");
        $this->crud->setRoute("admin/ProgramText");
        $this->crud->setEntityNameStrings('Program Text', 'Program Texts');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'textarea'
        ]);

        $this->crud->removeColumns(['program_id']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'name', 'type' => 'text']);
        $this->crud->addField(['name' => 'text', 'type' => 'textarea']);

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

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'name', 'type' => 'text']);
        $this->crud->addField(['name' => 'text', 'type' => 'textarea']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'textarea'
        ]);

        $this->crud->removeColumns(['program_id']);
    }
}
