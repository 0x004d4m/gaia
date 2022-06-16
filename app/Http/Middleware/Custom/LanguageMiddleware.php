<?php

namespace App\Http\Middleware\Custom;

use App\Models\ContactInfo;
use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::get('language_id') == null){
            $Language = Language::first();
            Session::put('language_id', $Language->id);
            Session::put('language_name', $Language->language);
            Session::put('language_dir', $Language->direction);
        }
        Session::put('languages',Language::get());
        $ContactInfo = ContactInfo::first();
        Session::put('facebook', $ContactInfo->facebook);
        Session::put('snapchat', $ContactInfo->snapchat);
        Session::put('instagram', $ContactInfo->instagram);
        return $next($request);
    }
}
