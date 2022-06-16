<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebsiteContent extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $table="website_content";

    protected $fillable = [
        'language_id',
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
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
