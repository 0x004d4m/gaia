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
    // Home Routes
    Route::crud('Languages', 'LanguageController');

    Route::crud('Locations', 'LocationController');

    Route::crud('Home', 'HomeController');
    Route::crud('HomeText', 'HomeTextController');
    Route::crud('HomeBanner', 'HomeBannerController');

    Route::crud('About', 'AboutController');
    Route::crud('AboutText', 'AboutTextController');

    Route::crud('ContactInfo', 'ContactInfoController');

    Route::crud('Gallery', 'GalleryController');

    Route::crud('WebsiteContent', 'WebsiteContentController');

    // Bookings Routes
    Route::crud('BookedTransportation', 'BookedTransportationController');
    Route::crud('BookedHotelRoom', 'BookedHotelRoomController');
    Route::crud('BookedProgram', 'BookedProgramController');

    // Hotels Routes
    Route::crud('Hotel', 'HotelController');
    Route::crud('HotelImage', 'HotelImageController');
    Route::crud('HotelText', 'HotelTextController');

    Route::crud('HotelRoom', 'HotelRoomController');
    Route::crud('HotelRoomText', 'HotelRoomTextController');

    // Programs Routes
    Route::crud('Program', 'ProgramController');
    Route::crud('ProgramImage', 'ProgramImageController');
    Route::crud('ProgramText', 'ProgramTextController');

    // Contact Messages Routes
    Route::crud('ContactMessages', 'ContactMessagesController');

    // Transportations Routes
    Route::crud('Transportations', 'TransportationController');
});
