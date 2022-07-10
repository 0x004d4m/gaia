<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class HotelTextController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Hotels'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\HotelText");
        $this->crud->setRoute("admin/HotelText");
        $this->crud->setEntityNameStrings('Hotel Text', 'Hotel Texts');
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

        $this->crud->removeColumns(['hotel_id','text']);
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
        $this->crud->addField(['name' => 'text', 'type' => 'CKEditor']);

        $this->crud->addField([
            'label' => "Hotel",
            'type' => "relationship",
            'name' => 'hotel_id',
            'entity' => 'hotel',
            'attribute' => "name",
            'model' => 'App\Models\Hotel',
            'default' => $_GET['hotel_id'] ?? null
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

        $this->crud->removeColumns(['hotel_id']);
    }
}
