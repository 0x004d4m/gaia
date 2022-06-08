<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Language\CreateRequest;
use App\Http\Requests\Admin\Language\UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class LanguageController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Languages'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\Language");
        $this->crud->setRoute("admin/Languages");
        $this->crud->setEntityNameStrings('Language', 'Languages');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('language',[
            'label' => "Language",
            'name' => 'language',
            'type' => "text",
        ]);

        $this->crud->setColumnDetails('direction',[
            'label' => "Direction",
            'name' => "direction",
            'type' => 'enum'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CreateRequest::class);

        $this->crud->addField(['name' => 'language', 'type' => 'text']);
        $this->crud->addField(['name' => 'direction', 'type' => 'enum']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(UpdateRequest::class);

        $this->crud->addField(['name' => 'language', 'type' => 'text']);
        $this->crud->addField(['name' => 'direction', 'type' => 'enum']);
    }
}
