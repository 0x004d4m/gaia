<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\NotifyAdmin;
use App\Models\About;
use App\Models\BookedProgram;
use App\Models\Program;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ProgramsController extends Controller
{
    public function index(Request $request)
    {
        $About = About::first();
        $Programs = Program::filter($request)->orderBy('created_at','desc')->paginate();
        $Prices = Program::distinct('price')->paginate();
        return view('website.programs',[
            "About" => $About->image,
            "Programs" => $Programs,
            "Prices" => $Prices,
        ]);
    }

    public function show(Request $request, $program_id)
    {
        $Program = Program::with('images')
                        ->where('id', $program_id)
                        ->first();
        return view('website.program',[
            "Program" => $Program
        ]);
        return view('website.program');
    }

    public function store(Request $request, $program_id)
    {
        $hyperpay = createPayment(Program::where('id', $program_id)->first()->price);
        $hyperpay_decoded = json_decode($hyperpay);

        if($hyperpay_decoded->result->code == '000.200.100'){
            try{
                $BookedProgram = BookedProgram::create([
                    'program_id' => $program_id,
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
                ]);

                return redirect("/BookedPrograms/".$BookedProgram->id."/Pay");
            }catch(Exception $e){
                Session::put("Message", t('something_went_wrong'));
                Session::put("Color", "danger");
            }
        }else{
            Session::put("Message", t('payment_unsuccessful'));
            Session::put("Color", "danger");
        }

        return redirect("/Programs/$program_id");
    }

    public function pay(Request $request, $booked_program_id)
    {
        $BookedProgram = BookedProgram::where('id', $booked_program_id)->first();

        return view('website.pay',[
            "Price"=>$BookedProgram->price,
            "Type"=>'BookedPrograms',
            "BookedID" => $BookedProgram->id,
            "HyperpayId" => json_decode($BookedProgram->hyperpay_create_payment)->id,
        ]);

    }

    public function check(Request $request, $booked_program_id)
    {
        $BookedProgram = BookedProgram::where('id', $booked_program_id)->first();
        if($BookedProgram->status==0 && $BookedProgram->hyperpay_check_payment == null){
            $hyperpay_decoded = json_decode($BookedProgram->hyperpay_create_payment);

            $hyperpay_checkpayment =  checkPayment($hyperpay_decoded->id);
            $hyperpay_checkpayment_decoded =  json_decode($hyperpay_checkpayment);

            if(
                $hyperpay_checkpayment_decoded->result->code == '000.100.110'
                &&
                $hyperpay_decoded->id == $request->id
            ){
                $BookedProgram->update([
                    "status" => 1,
                    'hyperpay_check_payment' => $hyperpay_checkpayment
                ]);
                Mail::to(getenv('MAIL_TO_ADDRESS'))->send(new NotifyAdmin($booked_program_id, 'Program'));
                return view('website.paymentSuccess');
            }else{
                Log::debug('hyperpay_decoded');
                Log::debug($BookedProgram->hyperpay_create_payment);
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
