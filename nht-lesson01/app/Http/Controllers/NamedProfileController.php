<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NamedProfileController extends Controller
{
    public function display()
    {
        return "<h1> Named Route Controller </h1>";
    }

    public function show()
    {
        return redirect()->route('display.profile');
    }
}
