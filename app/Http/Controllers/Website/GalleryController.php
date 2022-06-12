<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Gallery = Gallery::paginate();

        return view('website.gallery',[
            "About" => $About->image,
            "Gallery" => $Gallery,
        ]);
    }
}
