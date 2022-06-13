<?php

use App\Http\Controllers\website\api\HotelRoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/Hotel/{hotel_id}/Room/{room_id}/Price', [HotelRoomController::class, 'getPrice']);
