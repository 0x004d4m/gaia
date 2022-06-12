<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Location;
use App\Models\Transportation;
use Illuminate\Http\Request;

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
        return view('website.transporation');
    }

    public function store(Request $request, $transportation_id)
    {
        return view('website.transporation');
    }
}
