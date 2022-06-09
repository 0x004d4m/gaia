<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('website.contact');
    }
    
    public function store(Request $request)
    {
        return view('website.contact');
    }
}
