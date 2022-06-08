<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AboutTextController;

class AboutAboutTextController extends AboutTextController
{
    public function setup() {
        parent::setup();
        $about_id = \Route::current()->about_id;
        $this->crud->setModel("App\Models\AboutText");
        $this->crud->setRoute("admin/About/".$about_id."/AboutText");
        $this->crud->addClause('where', 'about_id', $about_id);
    }
}
