<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Program;
use Illuminate\Http\Request;

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
        return view('website.program');
    }

    public function store(Request $request, $program_id)
    {
        return view('website.program');
    }
}
