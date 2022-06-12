<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\{
    About,
    AboutText
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Text = AboutText::where('language_id',Session::get('language_id'))->first();

        return view('website.about',[
            "About" => $About->image,
            "About2" => $About->image2,
            "Text" => $Text->text,
        ]);
    }
}
