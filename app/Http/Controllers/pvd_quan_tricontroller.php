<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
use Hash;


class pvd_quan_tricontroller extends Controller
{
    //
    //get: login (authentication)
    public function pvdlogin(){
       return view('pvdlogin.pvd-login');
    }

    // post: login (authentication)
    public function pvdloginsubmit(Request $request)
{
    // Sử dụng đúng cú pháp validate
    $request->validate([
        'email' => 'required',
        'password' => 'required|min:6',
    ]);

    // Chỉ lấy các trường cần thiết
    $credentials = $request->only(
      'email', 
      'password');

    // Thực hiện đăng nhập
    if (Auth::attempt($credentials)) {
        return redirect()->intended(route('homeadmin'))->with('success', 'Login success');
    }

    return redirect()->back()->with('error', 'Login error');
}

}