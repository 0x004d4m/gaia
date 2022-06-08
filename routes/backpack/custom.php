<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('About', 'AboutController');
    Route::crud('AboutText', 'AboutTextController');
    Route::crud('ContactMessages', 'ContactMessagesController');
    Route::crud('Drives', 'DriveController');
    Route::crud('Gallery', 'GalleryController');
    Route::crud('Languages', 'LanguageController');
    Route::crud('Locations', 'LocationController');
    Route::group(['prefix' => 'About/{about_id}'], function()
    {
        Route::resource('AboutText', 'AboutAboutTextController');
    });
});
