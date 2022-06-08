<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class BookedDriveController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Bookings'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\BookedDrive");
        $this->crud->setRoute("admin/BookedDrive");
        $this->crud->setEntityNameStrings('Booked Drive', 'Booked Drives');
    }
}
