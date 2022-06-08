<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class ContactMessagesController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Contact Messages'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\ContactMessage");
        $this->crud->setRoute("admin/ContactMessages");
        $this->crud->setEntityNameStrings('Contact Message', 'Contact Messages');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('first_name',[
            'label' => "First Name",
            'name' => "first_name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('last_name',[
            'label' => "Last Name",
            'name' => "last_name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('email',[
            'label' => "Email",
            'name' => "email",
            'type' => 'email'
        ]);

        $this->crud->setColumnDetails('phone',[
            'label' => "Phone",
            'name' => "phone",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('subject',[
            'label' => "Subject",
            'name' => "subject",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('message',[
            'label' => "Message",
            'name' => "message",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->removeColumns(['message']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();
        $this->crud->setColumnDetails('first_name',[
            'label' => "First Name",
            'name' => "first_name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('last_name',[
            'label' => "Last Name",
            'name' => "last_name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('email',[
            'label' => "Email",
            'name' => "email",
            'type' => 'email'
        ]);

        $this->crud->setColumnDetails('phone',[
            'label' => "Phone",
            'name' => "phone",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('subject',[
            'label' => "Subject",
            'name' => "subject",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('message',[
            'label' => "Message",
            'name' => "message",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);
    }
}
