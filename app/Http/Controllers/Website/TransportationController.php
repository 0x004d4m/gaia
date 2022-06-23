<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\NotifyAdmin;
use App\Models\About;
use App\Models\BookedTransportation;
use App\Models\Location;
use App\Models\Transportation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class TransportationController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Locations = Location::get();
        $Transportations = Transportation::with('locationFrom')->with('locationTO')->filter($request)->paginate();
        return view('website.transportations',[
            "About" => $About->image,
            "Locations" => $Locations,
            "Transportations" => $Transportations,
        ]);
    }

    public function show(Request $request, $transportation_id)
    {
        $About = About::first();
        $Transportation = Transportation::with('locationFrom')->with('locationTO')->where('id', $transportation_id)->filter($request)->first();
        return view('website.transportation',[
            "About" => $About->image,
            "Transportation" => $Transportation,
        ]);
    }

    public function store(Request $request, $transportation_id)
    {
        $hyperpay = createPayment(Transportation::where('id', $transportation_id)->first()->price);
        $hyperpay_decoded = json_decode($hyperpay);

        if($hyperpay_decoded->result->code == '000.200.100'){
            try{
                $BookedTransportation = BookedTransportation::create([
                    'transportation_id' => $transportation_id,
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

                return redirect("/BookedTransportation/".$BookedTransportation->id."/Pay");
            }catch(Exception $e){
                Session::put("Message", t('something_went_wrong'));
                Session::put("Color", "danger");
            }
        }else{
            Session::put("Message", t('payment_unsuccessful'));
            Session::put("Color", "danger");
        }

        return redirect("/Transportation/$transportation_id");
    }

    public function pay(Request $request, $booked_transportation_id)
    {
        $BookedTransportation = BookedTransportation::where('id', $booked_transportation_id)->first();

        return view('website.pay',[
            "Price"=>$BookedTransportation->price,
            "Type" => "BookedTransportation",
            "BookedID" => $BookedTransportation->id,
            "HyperpayId" => json_decode($BookedTransportation->hyperpay_create_payment)->id,
        ]);
    }

    public function check(Request $request, $booked_transportation_id)
    {
        $BookedTransportation = BookedTransportation::where('id', $booked_transportation_id)->first();
        if($BookedTransportation->status==0 && $BookedTransportation->hyperpay_check_payment == null){
            $hyperpay_decoded = json_decode($BookedTransportation->hyperpay_create_payment);

            $hyperpay_checkpayment =  checkPayment($hyperpay_decoded->id);
            $hyperpay_checkpayment_decoded =  json_decode($hyperpay_checkpayment);

            if(
                $hyperpay_checkpayment_decoded->result->code == '000.100.110'
                &&
                $hyperpay_decoded->id == $request->id
            ){
                $BookedTransportation->update([
                    "status" => 1,
                    'hyperpay_check_payment' => $hyperpay_checkpayment
                ]);
                Mail::to(getenv('MAIL_TO_ADDRESS'))->send(new NotifyAdmin($booked_transportation_id, 'Transportation'));
                return view('website.paymentSuccess');
            }else{
                Log::debug('hyperpay_decoded');
                Log::debug($BookedTransportation->hyperpay_create_payment);
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
