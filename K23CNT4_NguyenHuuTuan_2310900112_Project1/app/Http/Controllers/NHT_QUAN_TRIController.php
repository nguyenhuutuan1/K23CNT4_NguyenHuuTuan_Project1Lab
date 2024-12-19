<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHT_QUAN_TRIController extends Controller
{
    public function nhtLogin(){
        return view('NhtLogin.nht-login');
    }
    public function nhtLoginSubmit(Request $request){
        return view('NhtLogin.nht-login');
    }
}
