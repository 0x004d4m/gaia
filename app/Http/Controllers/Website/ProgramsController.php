<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(Request $request)
    {
        return view('website.programs');
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
