<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ContactInfo;
use App\Models\ContactMessage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        return view('website.contact',[
            "About" => $About->image,
            "ContactInfo" => ContactInfo::first(),
        ]);
    }

    public function store(Request $request)
    {
        try{
            ContactMessage::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'language_id'=>Session::get('language_id'),
            ]);
            Session::put("Message", 'Message Sent Successfully');
            Session::put("Color", "success");
            return redirect('/Contact');
        }catch(Exception $e){
            Session::put("Message", 'Something Went Wrongy');
            Session::put("Color", "danger");
            return redirect('/Contact');
        }
    }
}
