<?php

use App\Models\WebsiteContent;
use Illuminate\Support\Facades\Session;

function t($translate){
    return WebsiteContent::select("$translate as name")->where('language_id', Session::get('language_id') ?? 1)->first()->name;
}
