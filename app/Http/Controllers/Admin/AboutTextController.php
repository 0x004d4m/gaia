<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
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
        if (!backpack_user()->can('Manage Home'))
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

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'text'
        ]);

        $this->crud->removeColumns(['about_id']);
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

        $this->crud->addField(['name' => 'text', 'type' => 'CKEditor']);
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

        $this->crud->addField(['name' => 'text', 'type' => 'CKEditor']);
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

        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'text'
        ]);

        $this->crud->removeColumns(['about_id']);
    }
}
