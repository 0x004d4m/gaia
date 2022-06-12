<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function language(Request $request, $language_id)
    {
        $Language = Language::where('id',$language_id)->first();
        Session::put('language_id', $Language->id);
        Session::put('language_name', $Language->language);
        Session::put('language_dir', $Language->diriction);

        return back();
    }
}
