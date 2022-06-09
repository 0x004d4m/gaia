<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class HomeBannerController extends CrudController
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
        $this->crud->setModel("App\Models\HomeBanner");
        $this->crud->setRoute("admin/HomeBanner");
        $this->crud->setEntityNameStrings('Home Banner', 'Home Banners');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->removeColumns(['home_id']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);
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

        $this->crud->removeColumns(['home_id']);
    }
}
