<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pvd_homecontroller extends Controller
{
    public function homelist()
    {
        return view('pvd-home');
    }
}