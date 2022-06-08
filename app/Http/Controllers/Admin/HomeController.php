<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\Widget;

class HomeController extends CrudController
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
        $this->crud->setModel("App\Models\Home");
        $this->crud->setRoute("admin/Home");
        $this->crud->setEntityNameStrings('Home', 'Home');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('video_url',[
            'label' => "Video URL",
            'name' => "video_url",
            'type' => 'text'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'image', 'type' => 'image']);
        $this->crud->addField(['name' => 'video_url', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('video_url',[
            'label' => "Video URL",
            'name' => "video_url",
            'type' => 'text'
        ]);

        Widget::add([
            'type'           => 'relation_table',
            'name'           => 'texts',
            'label'          => 'Home Texts',
            'backpack_crud'  => 'HomeText','columns' => [
                [
                    'label' => 'text',
                    'name'  => 'text',
                ],
                [
                    'label' => 'language',
                    'name'  => 'language.language',
                ],
            ],
        ])->to('after_content');

        Widget::add([
            'type'           => 'relation_table',
            'name'           => 'banners',
            'label'          => 'Home Banners',
            'backpack_crud'  => 'HomeText','columns' => [
                [
                    'label' => 'text',
                    'name'  => 'text',
                ],
                [
                    'label' => 'language',
                    'name'  => 'language.language',
                ],
            ],
        ])->to('after_content');
    }
}
