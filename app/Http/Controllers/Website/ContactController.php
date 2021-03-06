<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\NotifyAdmin;
use App\Models\About;
use App\Models\ContactInfo;
use App\Models\ContactMessage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            $ContactMessage = ContactMessage::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'language_id'=>Session::get('language_id'),
            ]);
            Mail::to(getenv('MAIL_TO_ADDRESS'))->send(new NotifyAdmin($ContactMessage->id, 'ContactMessage'));
            Session::put("Message", t('message_sent_successfully'));
            Session::put("Color", "success");
        }catch(Exception $e){
            Session::put("Message", t('something_went_wrong'));
            Session::put("Color", "danger");
        }
        return redirect('/Contact');
    }
}
