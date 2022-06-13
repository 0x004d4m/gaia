<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BookedProgram;
use App\Models\Program;
use Exception;
use Illuminate\Http\Request;
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
        // if(pay(Program::where('id', $program_id)->first()->price)){
            try{
                BookedProgram::create([
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
                    'nationality' => $request->nationality
                ]);

                Session::put("Message", 'Thank You For Booking, Someone Will Contact You Later To Confirm');
                Session::put("Color", "success");
            }catch(Exception $e){
                Session::put("Message", 'Something Went Wrong');
                Session::put("Color", "danger");
            }
        // }else{
        //     Session::put("Message", 'Payment unsuccessful, please try again later.');
        //     Session::put("Color", "danger");
        // }

        return redirect("/Programs/$program_id");
    }
}
