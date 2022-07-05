<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_content', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');

            $table->text('home');
            $table->text('about_us');
            $table->text('gallery');
            $table->text('programs');
            $table->text('hotels');
            $table->text('transportation');
            $table->text('contact_us');
            $table->text('welcome');
            $table->text('banner_title');
            $table->text('contact_number_1');
            $table->text('contact_number_2');
            $table->text('p_o_box');
            $table->text('email_address');
            $table->text('subject');
            $table->text('message');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('phone');
            $table->text('email');
            $table->text('date_of_birth');
            $table->text('number_of_people');
            $table->text('passport_number');
            $table->text('passport_issue_date');
            $table->text('passport_expiry_date');
            $table->text('nationality');
            $table->text('hotel_room_id');
            $table->text('hotel_name');
            $table->text('from');
            $table->text('to');
            $table->text('locations');
            $table->text('price');
            $table->text('hotel_site');
            $table->text('read_more');
            $table->text('book_now');
            $table->text('send_message');
            $table->text('submit');
            $table->text('search');
            $table->text('payment_failed');
            $table->text('payment_success');
            $table->text('start_payment');
            $table->text('message_sent_successfully');
            $table->text('something_went_wrong');
            $table->text('payment_unsuccessful');
            $table->text('please_pay_to_continue');
            $table->text('payment_successful');
            $table->text('terms_and_conditions');
            $table->text('wysiwyg-editor');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_content');
    }
};
