<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\Widget;

class HotelController extends CrudController
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
        $this->crud->setModel("App\Models\Hotel");
        $this->crud->setRoute("admin/Hotel");
        $this->crud->setEntityNameStrings('Hotel', 'Hotels');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('location_id',[
            'label' => "Location",
            'type' => "select",
            'name' => 'location_id',
            'entity' => 'location',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->setColumnDetails('url',[
            'label' => "URL",
            'type' => "link",
            'name' => 'url',
        ]);

        $this->crud->removeColumns(['hotel_id']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Location",
            'type' => "relationship",
            'name' => 'location_id',
            'entity' => 'location',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addField(['name' => 'url', 'type' => 'textarea']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Location",
            'type' => "relationship",
            'name' => 'location_id',
            'entity' => 'location',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addField(['name' => 'url', 'type' => 'textarea']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('location_id',[
            'label' => "Location",
            'type' => "select",
            'name' => 'location_id',
            'entity' => 'location',
            'attribute' => "name",
            'model' => 'App\Models\Location'
        ]);

        $this->crud->setColumnDetails('url',[
            'label' => "URL",
            'type' => "text",
            'name' => 'url',
        ]);

        $this->crud->removeColumns(['hotel_id']);

        Widget::add([
            'type'               => 'relation_table',
            'name'               => 'texts',
            'label'              => 'Hotel Texts',
            'button_create'      => true,
            'relation_attribute' => 'hotel_id',
            'backpack_crud'  => 'HotelText','columns' => [
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

        Widget::add([
            'type'           => 'relation_table',
            'name'           => 'images',
            'label'          => 'Hotel Images',
            'button_create'      => true,
            'relation_attribute' => 'hotel_id',
            'backpack_crud'  => 'HotelImage','columns' => [
                [
                    'label' => 'image',
                    'name'  => 'image',
                    'type' => 'image'
                ],
            ],
        ])->to('after_content');

        Widget::add([
            'type'           => 'relation_table',
            'name'           => 'rooms',
            'label'          => 'Hotel Rooms',
            'button_create'      => true,
            'relation_attribute' => 'hotel_id',
            'backpack_crud'  => 'HotelRoom','columns' => [
                [
                    'label' => 'name',
                    'name'  => 'name'
                ],
                [
                    'label' => 'price',
                    'name'  => 'price'
                ],
            ],
        ])->to('after_content');
    }
}
