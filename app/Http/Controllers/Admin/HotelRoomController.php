<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\Widget;

class HotelRoomController extends CrudController
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
        $this->crud->setModel("App\Models\HotelRoom");
        $this->crud->setRoute("admin/HotelRoom");
        $this->crud->setEntityNameStrings('Hotel Room', 'Hotel Rooms');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('price',[
            'label' => "Price",
            'name' => "price",
            'type' => 'text'
        ]);

        $this->crud->removeColumns(['hotel_id']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'price', 'type' => 'text']);

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

        $this->crud->addField(['name' => 'price', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('price',[
            'label' => "Price",
            'name' => "price",
            'type' => 'text'
        ]);

        $this->crud->removeColumns(['hotel_id']);

        Widget::add([
            'type'               => 'relation_table',
            'name'               => 'texts',
            'label'              => 'Hotel Room Texts',
            'button_create'      => true,
            'relation_attribute' => 'hotel_room_id',
            'backpack_crud'  => 'HotelRoomText','columns' => [
                [
                    'label' => 'name',
                    'name'  => 'name',
                ],
                [
                    'label' => 'language',
                    'name'  => 'language.language',
                ],
            ],
        ])->to('after_content');
    }
}
