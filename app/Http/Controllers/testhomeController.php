<?php

namespace App\Http\Controllers;
use App\Models\pvd_san_pham;
use Illuminate\Http\Request;

class testhomeController extends Controller
{
    public function pvdindex()
    {
        $pvdsp = pvd_san_pham::where('pvdtrangthai', 0)->get();
        return view('testhome', compact('pvdsp'));
    }
}
