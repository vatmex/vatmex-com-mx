<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function publicIndex()
    {
        return view('frontend.about.staff');
    }
}
