<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class BookedDriveController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Bookings'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\BookedDrive");
        $this->crud->setRoute("admin/BookedDrive");
        $this->crud->setEntityNameStrings('Booked Drive', 'Booked Drives');
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

        $this->crud->setColumnDetails('drive_id',[
            'label' => "Drive",
            'type' => "select",
            'name' => 'drive_id',
            'entity' => 'drive',
            'attribute' => "full_trip",
            'model' => 'App\Models\Drive'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Drive",
            'type' => "relationship",
            'name' => 'drive_id',
            'entity' => 'drive',
            'attribute' => "full_trip",
            'model' => 'App\Models\Drive'
        ]);

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'price', 'type' => 'hidden', "value" => -1]);
        $this->crud->addField(['name' => 'first_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'last_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'date_of_birth', 'type' => 'text']);
        $this->crud->addField(['name' => 'number_of_people', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_issue_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_expiry_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'nationality', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Drive",
            'type' => "relationship",
            'name' => 'drive_id',
            'entity' => 'drive',
            'attribute' => "full_trip",
            'model' => 'App\Models\Drive'
        ]);

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'price', 'type' => 'text','hint'=>'put -1 to get drive original price']);
        $this->crud->addField(['name' => 'first_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'last_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'date_of_birth', 'type' => 'text']);
        $this->crud->addField(['name' => 'number_of_people', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_issue_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_expiry_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'nationality', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();
    }
}
