<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ParametersController extends Controller
{
    //
    public function get()
    {
        return view('parameters');
    }

}
