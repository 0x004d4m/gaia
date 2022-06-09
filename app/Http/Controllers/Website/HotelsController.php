<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index(Request $request)
    {
        return view('website.hotels');
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
