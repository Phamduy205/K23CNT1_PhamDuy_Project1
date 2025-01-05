<?php

use App\Http\Controllers\pvd_san_phamController;
use App\Http\Controllers\testhomeController;
use App\Http\Controllers\pvd_loai_san_phamController;
use App\Http\Controllers\pvd_homecontroller;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\pvd_quan_triController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/admins/pvd-login',[pvd_quan_tricontroller::class,'pvdlogin'])->name('admins.pvdlogin');
Route::post('/admins/pvd-login',[pvd_quan_tricontroller::class,'pvdloginsubmit'])->name('admins.pvdloginsubmit');


Route::middleware('auth')->group(function () {
    Route::get('/pvd-admins',function () {return view('pvdAdmins.index');})->name('homeadmin');


Route::get('/', [testhomeController::class,'pvdindex']);

Route::get('/pvd-admins/pvdloai-san-pham',[pvd_loai_san_phamController::class, 'pvdList'])->name('pvdadmin.pvd-list');
Route::get('/pvd-admins/pvdloai-san-pham/pvd-create', [pvd_loai_san_phamController::class, 'pvdCreate'])->name('pvdadmin.pvdloaisanpham.pvdcreate');
Route::post('/pvd-admins/pvdloai-san-pham/pvd-create', [pvd_loai_san_phamController::class, 'pvdCreateSubmit'])->name('pvdadmin.pvdloaisanpham.pvdcreatesubmit');

//edit
Route::get('/pvd-admins/pvdloai-san-pham/pvd-edit/{pvdID}',[pvd_loai_san_phamController::class, 'pvdeditloaisanpham'])->name('pvdadmin.pvdeditloaisanpham');
Route::post('/pvd-admins/pvdloai-san-pham/pvd-edit/{pvdID}',[pvd_loai_san_phamController::class, 'pvdeditloaisanphamSubmit'])->name('pvdadmin.pvdeditloaisanphamSubmit');

// xóa sp
Route::Delete('/pvd-admins/pvdxoa-loai-san-pham/{pvdID}', [pvd_loai_san_phamController::class, 'pvdDelete'])->name('pvdadmin.pvddeleteloaisanpham');


// Route cho danh sách sản phẩm
Route::get('/pvd-admins/pvdthem-san-pham',[pvd_san_phamController::class,'pvdList'])->name('pvdadmin.pvdsanpham.pvd-List');

// Route create sản phẩm
Route::get('/pvd-admins/pvdthem-san-pham/pvd-Create',[pvd_san_phamController::class,'pvdCreate'])->name('pvdadmin.pvdsanpham.pvdCreatesanpham');    
Route::post('/pvd-admins/pvdthem-san-pham/pvd-Create',[pvd_san_phamController::class,'pvdCreateSubmit'])->name('pvdadmin.pvdsanpham.pvdCreateSubmitsanpham');

// Route edit sản phẩm
Route::get('/pvd-admins/pvdchinh-sua-san-pham/pvd-edit{pvdID}',[pvd_san_phamController::class, 'pvdeditsanpham'])->name('pvdtadmin.pvdteditsanpham');
Route::post('/pvd-admins/pvdchinh-sua-san-pham/pvd-edit{pvdID}',[pvd_san_phamController::class, 'pvdeditsanphamSubmit'])->name('pvdtadmin.pvdteditsanphamSubmit');

Route::delete('/pvd-admins/pvd-xoa-loai-san-pham/{pvdID}',[pvd_san_phamController::class, 'pvdDelete'])->name('pvdadmin.pvdpvddeletesp');

//home
Route::get('/home',[pvd_homecontroller::class, 'homelist'])->name('home');
});