<?php

namespace App\Http\Controllers\website\api;

use App\Http\Controllers\Controller;
use App\Models\HotelRoom;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    public function getPrice(Request $request, $hotel_id, $room_id)
    {
        return response()->json(["price"=>HotelRoom::where('hotel_id', $hotel_id)->where('id', $room_id)->first()->price], 200);
    }
}
