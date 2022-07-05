<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class WebsiteContentController extends CrudController
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
        $this->crud->setModel("App\Models\WebsiteContent");
        $this->crud->setRoute("admin/WebsiteContent");
        $this->crud->setEntityNameStrings('Website Content', 'Website Contents');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->removeColumns([
            'home',
            'about_us',
            'gallery',
            'programs',
            'hotels',
            'transportation',
            'contact_us',
            'welcome',
            'banner_title',
            'contact_number_1',
            'contact_number_2',
            'p_o_box',
            'email_address',
            'subject',
            'message',
            'first_name',
            'last_name',
            'phone',
            'email',
            'date_of_birth',
            'number_of_people',
            'passport_number',
            'passport_issue_date',
            'passport_expiry_date',
            'nationality',
            'hotel_room_id',
            'hotel_name',
            'from',
            'to',
            'locations',
            'price',
            'hotel_site',
            'read_more',
            'book_now',
            'send_message',
            'submit',
            'search',
            'payment_failed',
            'payment_success',
            'start_payment',
            'message_sent_successfully',
            'something_went_wrong',
            'payment_unsuccessful',
            'please_pay_to_continue',
            'payment_successful',
            'terms_and_conditions',
            'wysiwyg-editor',
            'things_to_know',
            'history_and_info',
            'culter_and_people'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'home', 'type' => 'text']);
        $this->crud->addField(['name' => 'about_us', 'type' => 'text']);
        $this->crud->addField(['name' => 'gallery', 'type' => 'text']);
        $this->crud->addField(['name' => 'programs', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotels', 'type' => 'text']);
        $this->crud->addField(['name' => 'transportation', 'type' => 'text']);
        $this->crud->addField(['name' => 'contact_us', 'type' => 'text']);
        $this->crud->addField(['name' => 'welcome', 'type' => 'text']);
        $this->crud->addField(['name' => 'banner_title', 'type' => 'text']);
        $this->crud->addField(['name' => 'contact_number_1', 'type' => 'text']);
        $this->crud->addField(['name' => 'contact_number_2', 'type' => 'text']);
        $this->crud->addField(['name' => 'p_o_box', 'type' => 'text']);
        $this->crud->addField(['name' => 'email_address', 'type' => 'text']);
        $this->crud->addField(['name' => 'subject', 'type' => 'text']);
        $this->crud->addField(['name' => 'message', 'type' => 'text']);
        $this->crud->addField(['name' => 'first_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'last_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone', 'type' => 'text']);
        $this->crud->addField(['name' => 'email', 'type' => 'text']);
        $this->crud->addField(['name' => 'date_of_birth', 'type' => 'text']);
        $this->crud->addField(['name' => 'number_of_people', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_issue_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_expiry_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'nationality', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotel_room_id', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotel_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'from', 'type' => 'text']);
        $this->crud->addField(['name' => 'to', 'type' => 'text']);
        $this->crud->addField(['name' => 'locations', 'type' => 'text']);
        $this->crud->addField(['name' => 'price', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotel_site', 'type' => 'text']);
        $this->crud->addField(['name' => 'read_more', 'type' => 'text']);
        $this->crud->addField(['name' => 'book_now', 'type' => 'text']);
        $this->crud->addField(['name' => 'send_message', 'type' => 'text']);
        $this->crud->addField(['name' => 'submit', 'type' => 'text']);
        $this->crud->addField(['name' => 'search', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_failed', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_success', 'type' => 'text']);
        $this->crud->addField(['name' => 'start_payment', 'type' => 'text']);
        $this->crud->addField(['name' => 'message_sent_successfully', 'type' => 'text']);
        $this->crud->addField(['name' => 'something_went_wrong', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_unsuccessful', 'type' => 'text']);
        $this->crud->addField(['name' => 'please_pay_to_continue', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_successful', 'type' => 'text']);
        $this->crud->addField(['name' => 'terms_and_conditions', 'type' => 'text']);

        $this->crud->addField(['name' => 'wysiwyg-editor', "label"=>'terms_and_conditions', 'type' => 'CKEditor']);
        $this->crud->addField(['name' => 'things_to_know', 'type' => 'CKEditor']);
        $this->crud->addField(['name' => 'history_and_info', 'type' => 'CKEditor']);
        $this->crud->addField(['name' => 'culter_and_people', 'type' => 'CKEditor']);

    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Language",
            'type' => "relationship",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->addField(['name' => 'home', 'type' => 'text']);
        $this->crud->addField(['name' => 'about_us', 'type' => 'text']);
        $this->crud->addField(['name' => 'gallery', 'type' => 'text']);
        $this->crud->addField(['name' => 'programs', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotels', 'type' => 'text']);
        $this->crud->addField(['name' => 'transportation', 'type' => 'text']);
        $this->crud->addField(['name' => 'contact_us', 'type' => 'text']);
        $this->crud->addField(['name' => 'welcome', 'type' => 'text']);
        $this->crud->addField(['name' => 'banner_title', 'type' => 'text']);
        $this->crud->addField(['name' => 'contact_number_1', 'type' => 'text']);
        $this->crud->addField(['name' => 'contact_number_2', 'type' => 'text']);
        $this->crud->addField(['name' => 'p_o_box', 'type' => 'text']);
        $this->crud->addField(['name' => 'email_address', 'type' => 'text']);
        $this->crud->addField(['name' => 'subject', 'type' => 'text']);
        $this->crud->addField(['name' => 'message', 'type' => 'text']);
        $this->crud->addField(['name' => 'first_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'last_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone', 'type' => 'text']);
        $this->crud->addField(['name' => 'email', 'type' => 'text']);
        $this->crud->addField(['name' => 'date_of_birth', 'type' => 'text']);
        $this->crud->addField(['name' => 'number_of_people', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_issue_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'passport_expiry_date', 'type' => 'text']);
        $this->crud->addField(['name' => 'nationality', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotel_room_id', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotel_name', 'type' => 'text']);
        $this->crud->addField(['name' => 'from', 'type' => 'text']);
        $this->crud->addField(['name' => 'to', 'type' => 'text']);
        $this->crud->addField(['name' => 'locations', 'type' => 'text']);
        $this->crud->addField(['name' => 'price', 'type' => 'text']);
        $this->crud->addField(['name' => 'hotel_site', 'type' => 'text']);
        $this->crud->addField(['name' => 'read_more', 'type' => 'text']);
        $this->crud->addField(['name' => 'book_now', 'type' => 'text']);
        $this->crud->addField(['name' => 'send_message', 'type' => 'text']);
        $this->crud->addField(['name' => 'submit', 'type' => 'text']);
        $this->crud->addField(['name' => 'search', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_failed', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_success', 'type' => 'text']);
        $this->crud->addField(['name' => 'start_payment', 'type' => 'text']);
        $this->crud->addField(['name' => 'message_sent_successfully', 'type' => 'text']);
        $this->crud->addField(['name' => 'something_went_wrong', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_unsuccessful', 'type' => 'text']);
        $this->crud->addField(['name' => 'please_pay_to_continue', 'type' => 'text']);
        $this->crud->addField(['name' => 'payment_successful', 'type' => 'text']);
        $this->crud->addField(['name' => 'terms_and_conditions', 'type' => 'text']);

        $this->crud->addField(['name' => 'wysiwyg-editor', "label"=>'Terms And Conditions', 'type' => 'CKEditor']);
        $this->crud->addField(['name' => 'things_to_know', 'type' => 'CKEditor']);
        $this->crud->addField(['name' => 'history_and_info', 'type' => 'CKEditor']);
        $this->crud->addField(['name' => 'culter_and_people', 'type' => 'CKEditor']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('language_id',[
            'label' => "Language",
            'type' => "select",
            'name' => 'language_id',
            'entity' => 'language',
            'attribute' => "language",
            'model' => 'App\Models\Language'
        ]);

        $this->crud->removeColumns(['Terms And Conditions','things_to_know','history_and_info','culter_and_people']);
    }
}
