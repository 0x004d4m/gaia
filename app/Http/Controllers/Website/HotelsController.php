<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\NotifyAdmin;
use App\Models\About;
use App\Models\BookedHotelRoom;
use App\Models\Hotel;
use App\Models\HotelRoom;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HotelsController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Hotels = Hotel::with('location')->filter($request)->orderBy('created_at','desc')->paginate();
        $Locations = Hotel::distinct('location_id')->with('location')->paginate();
        return view('website.hotels',[
            "About" => $About->image,
            "Hotels" => $Hotels,
            "Locations" => $Locations,
        ]);
    }

    public function show(Request $request, $hotel_id)
    {
        $Hotel = Hotel::with('rooms')
                        ->with('images')
                        ->with('location')
                        ->where('id', $hotel_id)
                        ->first();
        return view('website.hotel',[
            "Hotel" => $Hotel
        ]);
    }

    public function store(Request $request, $hotel_id)
    {
        $hyperpay = createPayment(HotelRoom::where('id',$request->hotel_room_id)->first()->price);
        $hyperpay_decoded = json_decode($hyperpay);

        if($hyperpay_decoded->result->code == '000.200.100'){
            try{
                $BookedHotelRoom = BookedHotelRoom::create([
                    'hotel_room_id' => $request->hotel_room_id,
                    'language_id' => Session::get('language_id'),
                    'price' => -1,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'date_of_birth' => $request->date_of_birth,
                    'number_of_people' => $request->number_of_people,
                    'passport_number' => $request->passport_number,
                    'passport_issue_date' => $request->passport_issue_date,
                    'passport_expiry_date' => $request->passport_expiry_date,
                    'nationality' => $request->nationality,
                    'hyperpay_create_payment' => $hyperpay
                ]);;

                return redirect("/BookedHotelRoom/".$BookedHotelRoom->id."/Pay");
            }catch(Exception $e){
                Session::put("Message", t('something_went_wrong'));
                Session::put("Color", "danger");
            }
        }else{
            Session::put("Message", t('payment_unsuccessful'));
            Session::put("Color", "danger");
        }

        return redirect("/Hotels/$hotel_id");
    }

    public function pay(Request $request, $booked_hotel_room_id)
    {
        $BookedHotelRoom = BookedHotelRoom::where('id', $booked_hotel_room_id)->first();

        return view('website.pay',[
            "Price"=>$BookedHotelRoom->price,
            "Type"=>'BookedHotelRoom',
            "BookedID" => $BookedHotelRoom->id,
            "HyperpayId" => json_decode($BookedHotelRoom->hyperpay_create_payment)->id,
        ]);
    }

    public function check(Request $request, $booked_hotel_room_id)
    {
        $BookedHotelRoom = BookedHotelRoom::where('id', $booked_hotel_room_id)->first();
        if($BookedHotelRoom->status==0 && $BookedHotelRoom->hyperpay_check_payment == null){
            $hyperpay_decoded = json_decode($BookedHotelRoom->hyperpay_create_payment);

            $hyperpay_checkpayment =  checkPayment($hyperpay_decoded->id);
            $hyperpay_checkpayment_decoded =  json_decode($hyperpay_checkpayment);

            if(
                $hyperpay_checkpayment_decoded->result->code == '000.100.110'
                &&
                $hyperpay_decoded->id == $request->id
            ){
                $BookedHotelRoom->update([
                    "status" => 1,
                    'hyperpay_check_payment' => $hyperpay_checkpayment
                ]);
                Mail::to(getenv('MAIL_TO_ADDRESS'))->send(new NotifyAdmin($booked_hotel_room_id, 'HotelRoom'));
                return view('website.paymentSuccess');
            }else{
                Log::debug('hyperpay_decoded');
                Log::debug($BookedHotelRoom->hyperpay_create_payment);
                Log::debug('hyperpay_checkpayment_decoded');
                Log::debug($hyperpay_checkpayment);
                return view('website.paymentFailed',[
                    "Error" => $hyperpay_checkpayment_decoded->result->description
                ]);
            }
        }else{
            return view('website.paymentSuccess');
        }
    }
}
