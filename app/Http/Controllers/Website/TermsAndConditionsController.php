<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        return view('website.termsAndConditions',[
            "About" => $About->image,
        ]);
    }
}
