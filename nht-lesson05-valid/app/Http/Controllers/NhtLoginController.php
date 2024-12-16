<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NhtLoginController extends Controller
{
    public function index(){
        return view('nht-login');
    }
    
    public function nhtSubmit(Request $request){
        $validation = $requuest->validate([
            'email' => 'request|email',
            'pass'  => 'request|min:6|max:12'
        ]);

        $email = $request->input('email');
        $pass =  $request->input('pass');
    }
    
    return request
}
