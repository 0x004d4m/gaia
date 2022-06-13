<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BookedTransportation;
use App\Models\Location;
use App\Models\Transportation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransportationController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Locations = Location::get();
        $Transportations = Transportation::with('locationFrom')->with('locationTO')->filter($request)->paginate();
        return view('website.transportations',[
            "About" => $About->image,
            "Locations" => $Locations,
            "Transportations" => $Transportations,
        ]);
    }

    public function show(Request $request, $transportation_id)
    {
        $About = About::first();
        $Transportation = Transportation::with('locationFrom')->with('locationTO')->where('id', $transportation_id)->filter($request)->first();
        return view('website.transportation',[
            "About" => $About->image,
            "Transportation" => $Transportation,
        ]);
    }

    public function store(Request $request, $transportation_id)
    {
        try{
            BookedTransportation::create([
                'transportation_id' => $transportation_id,
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

            Session::put("Message", 'Thank You For Booking, Someone Will Contact You Later To Confirm');
            Session::put("Color", "success");
        }catch(Exception $e){
            Session::put("Message", 'Something Went Wrong');
            Session::put("Color", "danger");
        }

        return redirect("/Transportation/$transportation_id");
    }
}
