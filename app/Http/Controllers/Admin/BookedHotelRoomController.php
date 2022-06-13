<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class BookedHotelRoomController extends CrudController
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
        $this->crud->setModel("App\Models\BookedHotelRoom");
        $this->crud->setRoute("admin/BookedHotelRoom");
        $this->crud->setEntityNameStrings('Booked Hotel Room', 'Booked Hotel Rooms');
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

        $this->crud->setColumnDetails('hotel_room_id',[
            'label' => "Hotel Room",
            'type' => "select",
            'name' => 'hotel_room_id',
            'entity' => 'hotelRoom',
            'attribute' => "name",
            'model' => 'App\Models\HotelRoom'
        ]);

        $this->crud->addClause('where','status',1);
        $this->crud->removeColumns(['hyperpay_create_payment','hyperpay_check_payment','status']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Hotel Room",
            'type' => "relationship",
            'name' => 'hotel_room_id',
            'entity' => 'hotelRoom',
            'attribute' => "name",
            'model' => 'App\Models\HotelRoom'
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
        $this->crud->addField(['name' =>'phone', 'type' => 'text']);
        $this->crud->addField(['name' =>'email', 'type' => 'text']);
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
            'label' => "Hotel Room",
            'type' => "relationship",
            'name' => 'hotel_room_id',
            'entity' => 'hotelRoom',
            'attribute' => "name",
            'model' => 'App\Models\HotelRoom'
        ]);

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'price', 'type' => 'text','hint'=>'put -1 to get room original price']);
        $this->crud->addField(['name' => 'first_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'last_name', 'type' => 'text']);
        $this->crud->addField(['name' =>'phone', 'type' => 'text']);
        $this->crud->addField(['name' =>'email', 'type' => 'text']);
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

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->setColumnDetails('hotel_room_id',[
            'label' => "Hotel Room",
            'type' => "select",
            'name' => 'hotel_room_id',
            'entity' => 'hotelRoom',
            'attribute' => "name",
            'model' => 'App\Models\HotelRoom'
        ]);
        $this->crud->removeColumns(['hyperpay_create_payment','hyperpay_check_payment','status']);
    }
}
