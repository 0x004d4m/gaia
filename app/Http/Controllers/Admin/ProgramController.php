<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\Widget;

class ProgramController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Programs'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\Program");
        $this->crud->setRoute("admin/Program");
        $this->crud->setEntityNameStrings('Program', 'Programs');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'price', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'price', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        Widget::add([
            'type'               => 'relation_table',
            'name'               => 'texts',
            'label'              => 'Program Texts',
            'button_create'      => true,
            'relation_attribute' => 'program_id',
            'backpack_crud'  => 'ProgramText','columns' => [
                [
                    'label' => 'name',
                    'name'  => 'name',
                ],
                [
                    'label' => 'text',
                    'name'  => 'text',
                    'type' => 'textarea'
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
            'label'          => 'Program Images',
            'button_create'      => true,
            'relation_attribute' => 'program_id',
            'backpack_crud'  => 'ProgramImage','columns' => [
                [
                    'label' => 'image',
                    'name'  => 'image',
                    'type' => 'image'
                ],
            ],
        ])->to('after_content');
    }
}
