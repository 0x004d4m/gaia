<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ContactInfoController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Home'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\ContactInfo");
        $this->crud->setRoute("admin/ContactInfo");
        $this->crud->setEntityNameStrings('Contact Info', 'ContactInfos');
    }
    protected $fillable = [
        'facebook',
        'snapchat',
        'instagram',
        'phone1',
        'phone2',
        'email',
        'POBox',
        'location',
    ];

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('facebook',['name' => 'facebook','type' => "text",]);
        $this->crud->setColumnDetails('snapchat',['name' => 'snapchat','type' => "text",]);
        $this->crud->setColumnDetails('instagram',['name' => 'instagram','type' => "text",]);
        $this->crud->setColumnDetails('phone1',['name' => 'phone1','type' => "text",]);
        $this->crud->setColumnDetails('phone2',['name' => 'phone2','type' => "text",]);
        $this->crud->setColumnDetails('email',['name' => 'email','type' => "text",]);
        $this->crud->setColumnDetails('POBox',['name' => 'POBox','type' => "text",]);
        $this->crud->removeColumns(['location']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'facebook', 'type' => 'text']);
        $this->crud->addField(['name' => 'snapchat', 'type' => 'text']);
        $this->crud->addField(['name' => 'instagram', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone1', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone2', 'type' => 'text']);
        $this->crud->addField(['name' => 'email', 'type' => 'text']);
        $this->crud->addField(['name' => 'POBox', 'type' => 'text']);
        $this->crud->addField(['name' => 'location', 'type' => 'textarea']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('facebook',['name' => 'facebook','type' => "text",]);
        $this->crud->setColumnDetails('snapchat',['name' => 'snapchat','type' => "text",]);
        $this->crud->setColumnDetails('instagram',['name' => 'instagram','type' => "text",]);
        $this->crud->setColumnDetails('phone1',['name' => 'phone1','type' => "text",]);
        $this->crud->setColumnDetails('phone2',['name' => 'phone2','type' => "text",]);
        $this->crud->setColumnDetails('email',['name' => 'email','type' => "text",]);
        $this->crud->setColumnDetails('POBox',['name' => 'POBox','type' => "text",]);
        $this->crud->setColumnDetails('location',['name' => 'location','type' => "textarea",]);
    }
}
