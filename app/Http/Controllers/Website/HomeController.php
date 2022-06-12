<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\HomeBanner;
use App\Models\HomeText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $Home = Home::select('image','video_url')->first();
        $HomeText = HomeText::select('text')->where('language_id',Session::get('language_id'))->first();
        $HomeBanners = HomeBanner::select('image')->get();
        return view('website.home',[
            "Home"=>$Home,
            "Text"=>$HomeText->text,
            "Banners"=>$HomeBanners
        ]);
    }
}
