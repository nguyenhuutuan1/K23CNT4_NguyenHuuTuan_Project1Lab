<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhtProductController extends Controller
{
    public function nhtIndex()
    {
        $fruits = array("Apple", "Orange", "Mango", "Banana", "Pineapple");
        return view('test', ["fruits" => $fruits]);
    }
}
