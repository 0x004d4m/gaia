<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Hotel;
use Illuminate\Http\Request;

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
        return view('website.hotel');
    }

    public function store(Request $request, $hotel_id)
    {
        return view('website.hotel');
    }
}
