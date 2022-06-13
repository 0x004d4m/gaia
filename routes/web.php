<?php

use App\Http\Controllers\Website\{
    AboutController,
    ContactController,
    GalleryController,
    HomeController,
    HotelsController,
    LanguageController,
    ProgramsController,
    TransportationController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/Home');
});

Route::group([
    'middleware' => 'language'
], function () {
    Route::get('/Language/{language_id}', [LanguageController::class, 'language']);
    Route::get('/Home', [HomeController::class, 'index']);
    Route::get('/About', [AboutController::class, 'index']);
    Route::get('/Gallery', [GalleryController::class, 'index']);
    Route::get('/Programs', [ProgramsController::class, 'index']);
    Route::get('/Programs/{program_id}', [ProgramsController::class, 'show']);
    Route::post('/Programs/{program_id}', [ProgramsController::class, 'store']);
    Route::get('/Hotels', [HotelsController::class, 'index']);
    Route::get('/Hotels/{hotel_id}', [HotelsController::class, 'show']);
    Route::post('/Hotels/{hotel_id}', [HotelsController::class, 'store']);
    Route::get('/Transportation', [TransportationController::class, 'index']);
    Route::get('/Transportation/{transportation_id}', [TransportationController::class, 'show']);
    Route::post('/Transportation/{transportation_id}', [TransportationController::class, 'store']);
    Route::get('/Contact', [ContactController::class, 'index']);
    Route::post('/Contact', [ContactController::class, 'store']);
});
