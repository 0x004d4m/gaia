<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        return view('website.privacyPolicy',[
            "About" => $About->image,
        ]);
    }
}
