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
        Schema::create('booked_programs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');

            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');

            $table->double('price');

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

            $table->text('status')->default(0);
            $table->text('hyperpay_create_payment')->nullable();
            $table->text('hyperpay_check_payment')->nullable();

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
        Schema::dropIfExists('booked_programs');
    }
};
