<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
    }
}
