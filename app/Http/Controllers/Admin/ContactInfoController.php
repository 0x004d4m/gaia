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

        $this->crud->setColumnDetails('phone1',['name' => 'phone1','type' => "phone",]);
        $this->crud->setColumnDetails('phone2',['name' => 'phone2','type' => "phone",]);
        $this->crud->setColumnDetails('email',['name' => 'email','type' => "email",]);
        $this->crud->setColumnDetails('POBox',['name' => 'POBox','type' => "text",]);
        $this->crud->setColumnDetails('facebook',['name' => 'facebook','type' => "link",]);
        $this->crud->setColumnDetails('snapchat',['name' => 'snapchat','type' => "link",]);
        $this->crud->setColumnDetails('instagram',['name' => 'instagram','type' => "link",]);
        $this->crud->setColumnDetails('location',['name' => 'location','type' => "link",]);
        $this->crud->removeColumns(['location','facebook','snapchat','instagram']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'phone1', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone2', 'type' => 'text']);
        $this->crud->addField(['name' => 'email', 'type' => 'text']);
        $this->crud->addField(['name' => 'POBox', 'type' => 'text']);
        $this->crud->addField(['name' => 'facebook', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'snapchat', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'instagram', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'location', 'type' => 'textarea','hint'=>'Go to google maps select the location then press share choose embed, copy it and paste it in the text area']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('phone1',['name' => 'phone1','type' => "phone",]);
        $this->crud->setColumnDetails('phone2',['name' => 'phone2','type' => "phone",]);
        $this->crud->setColumnDetails('email',['name' => 'email','type' => "email",]);
        $this->crud->setColumnDetails('POBox',['name' => 'POBox','type' => "text",]);
        $this->crud->setColumnDetails('facebook',['name' => 'facebook','type' => "link",]);
        $this->crud->setColumnDetails('snapchat',['name' => 'snapchat','type' => "link",]);
        $this->crud->setColumnDetails('instagram',['name' => 'instagram','type' => "link",]);
        $this->crud->setColumnDetails('location',['name' => 'location','type' => "link",]);
    }
}
