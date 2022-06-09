<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function index(Request $request)
    {
        return view('website.transportations');
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
