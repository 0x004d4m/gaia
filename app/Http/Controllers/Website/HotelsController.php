<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BookedHotelRoom;
use App\Models\Hotel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HotelsController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Hotels = Hotel::with('location')->filter($request)->orderBy('created_at','desc')->paginate();
        $Locations = Hotel::distinct('location_id')->with('location')->paginate();
        return view('website.hotels',[
            "About" => $About->image,
            "Hotels" => $Hotels,
            "Locations" => $Locations,
        ]);
    }

    public function show(Request $request, $hotel_id)
    {
        $Hotel = Hotel::with('rooms')
                        ->with('images')
                        ->with('location')
                        ->where('id', $hotel_id)
                        ->first();
        return view('website.hotel',[
            "Hotel" => $Hotel
        ]);
    }

    public function store(Request $request, $hotel_id)
    {
        try{
            BookedHotelRoom::create([
                'hotel_room_id' => $request->hotel_room_id,
                'language_id' => Session::get('language_id'),
                'price' => -1,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'number_of_people' => $request->number_of_people,
                'passport_number' => $request->passport_number,
                'passport_issue_date' => $request->passport_issue_date,
                'passport_expiry_date' => $request->passport_expiry_date,
                'nationality' => $request->nationality
            ]);

            Session::put("Message", 'Thank You For Booking Someone Will Contact You Later To Confirm');
            Session::put("Color", "success");
        }catch(Exception $e){
            Session::put("Message", 'Something Went Wrong');
            Session::put("Color", "danger");
        }

        return redirect("/Hotels/$hotel_id");
    }
}
