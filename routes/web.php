<?php

use App\Http\Controllers\Website\{
    AboutController,
    ContactController,
    GalleryController,
    HomeController,
    HotelsController,
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

Route::get('/Home', [HomeController::class, 'index']);
Route::get('/About', [AboutController::class, 'index']);
Route::get('/Gallery', [GalleryController::class, 'index']);
Route::get('/Programs', [ProgramsController::class, 'index']);
Route::get('/Hotels', [HotelsController::class, 'index']);
Route::get('/Transportation', [TransportationController::class, 'index']);
Route::get('/Contact', [ContactController::class, 'index']);
