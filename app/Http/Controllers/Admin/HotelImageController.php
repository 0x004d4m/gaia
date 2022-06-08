<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class HotelImageController extends CrudController
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
        $this->crud->setModel("App\Models\HotelImage");
        $this->crud->setRoute("admin/HotelImage");
        $this->crud->setEntityNameStrings('Hotel Image', 'Hotel Images');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->removeColumns(['hotel_id']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);

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

        $this->crud->removeColumns(['hotel_id']);
    }
}
