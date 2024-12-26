<?php

use App\Http\Controllers\NHT_QUAN_TRIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nht_LOAI_SAN_PHAMController;
use App\Http\Controllers\nht_SAN_PHAMController;
use App\Http\Controllers\nht_KHACH_HANGcontroller;
use App\Http\Controllers\nht_DANH_SACH_QUAN_TRIController;
use App\Http\Controllers\nht_HOA_DONController;

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


// admins login --------------------------------------------------------------------------------------------------------------------------------------
use App\Http\Controllers\NHT_QUAN_TRIController;
Route::get('/', [NHT_QUAN_TRIController::class, 'nhtLogin'])->name('admins.nhtLogin');
Route::post('/', [NHT_QUAN_TRIController::class, 'nhtLoginSubmit'])->name('admins.nhtLoginSubmit');


route::get('/nht-admins',function(){
    return view('nhtAdmins.index');
});
Route::get('/nht-admins/nhtdanhsachquantri/nhtdanhmuc', [NHT_DANH_SACH_QUAN_TRIController::class, 'danhmuc'])->name('nhtAdmins.nhtdanhsachquantri.danhmuc');
Route::get('/nht-admins/nhtdanhsachquantri/nhttintuc', [NHT_DANH_SACH_QUAN_TRIController::class, 'tintuc'])->name('nhtAdmins.nhtdanhsachquantri..danhmuc.tintuc');
Route::get('/nht-admins/nhtdanhsachquantri/nhtsanpham', [NHT_DANH_SACH_QUAN_TRIController::class, 'sanpham'])->name('nhtAdmins.nhtdanhsachquantri.danhmuc.sanpham');
Route::get('/nht-admins/nhtdanhsachquantri/nhtmota/{id}', [NHT_DANH_SACH_QUAN_TRIController::class, 'mota'])->name('nhtAdmins.nhtdanhsachquantri.danhmuc.mota');
Route::get('/nht-admins/nhtdanhsachquantri/nhtnguoidung', [NHT_DANH_SACH_QUAN_TRIController::class, 'nguoidung'])->name('nhtAdmins.nhtdanhsachquantri.nguoidung');

Route::get('/nht-admins/nht-loai-san-pham',[NHT::class,'nhtList'])->name('nhtadmins.nhtloaisanpham');
Route::get('/nht-admins/nht-loai-san-pham/nht-create',[NHT_LOAI_SAN_PHAMController::class,'nhtCreate'])->name('nhtadmin.nhtloaisanpham.nhtcreate');
Route::post('/nht-admins/nht-loai-san-pham/nht-create',[NHT_LOAI_SAN_PHAMController::class,'nhtCreateSunmit'])->name('nhtadmin.nhtloaisanpham.nhtCreateSunmit');
Route::get('/nht-admins/nht-loai-san-pham/nht-edit/{id}',[NHT_LOAI_SAN_PHAMController::class,'nhtEdit'])->name('nhtadmin.nhtloaisanpham.nhtEdit');
Route::post('/nht-admins/nht-loai-san-pham/nht-edit',[nht_LOAI_SAN_PHAMController::class,'nhtEditSubmit'])->name('nhtadmin.nhtloaisanpham.nhtEditSubmit');
Route::get('/nht-admins/nht-loai-san-pham/nht-detail/{id}',[nht_LOAI_SAN_PHAMController::class,'nhtGetDetail'])->name('nhtadmin.nhtloaisanpham.nhtGetDetail');
Route::get('/nht-admins/nht-loai-san-pham/nht-delete/{id}',[nht_LOAI_SAN_PHAMController::class,'nhtDelete'])->name('nhtadmin.nhtloaisanpham.nhtDelete');

Route::get('/nht-admins/nht-san-pham',[nht_SAN_PHAMController::class,'nhtList'])->name('nhtadims.nhtsanpham');
Route::get('/nht-admins/nht-san-pham/nht-create',[nht_SAN_PHAMController::class,'nhtCreate'])->name('nhtadmin.nhtsanpham.nhtcreate');
Route::post('/nht-admins/nht-san-pham/nht-create',[nht_SAN_PHAMController::class,'nhtCreateSubmit'])->name('nhtadmin.nhtsanpham.nhtCreateSubmit');
Route::get('/nht-admins/nht-san-pham/nht-detail/{id}', [nht_SAN_PHAMController::class, 'nhtDetail'])->name('nhtadmin.nhtsanpham.nhtDetail');
Route::get('/nht-admins/nht-san-pham/nht-edit/{id}', [nht_SAN_PHAMController::class, 'nhtEdit'])->name('nhtadmin.nhtsanpham.nhtedit');

Route::post('/nht-admins/nht-san-pham/nht-edit/{id}', [nht_SAN_PHAMController::class, 'nhtEditSubmit'])->name('nhtadmin.nhtsanpham.nhtEditSubmit');
Route::get('/nht-admins/nht-san-pham/nht-delete/{id}', [nht_SAN_PHAMController::class, 'nhtdelete'])->name('nhtadmin.nhtsanpham.nhtdelete');


Route::get('/nht-admins/nht-khach-hang',[nht_KHACH_HANGcontroller::class,'nhtList'])->name('nhtadmins.nhtkhachhang');
Route::get('/nht-admins/nht-khach-hang/nht-detail/{id}', [nht_KHACH_HANGcontroller::class, 'nhtDetail'])->name('nhtadmin.nhtkhachhang.nhtDetail');
Route::get('/nht-admins/nht-khach-hang/nht-create',[nht_KHACH_HANGcontroller::class,'nhtCreate'])->name('nhtadmin.nhtkhachhang.nhtcreate');
Route::post('/nht-admins/nht-khach-hang/nht-create',[nht_KHACH_HANGcontroller::class,'nhtCreateSubmit'])->name('nhtadmin.nhtkhachhang.nhtCreateSubmit');
Route::get('/nht-admins/nht-khach-hang/nht-edit/{id}', [nht_KHACH_HANGcontroller::class, 'nhtEdit'])->name('nhtadmin.nhtkhachhang.nhtedit');
Route::post('/nht-admins/nht-khach-hang/nht-edit/{id}', [nht_KHACH_HANGcontroller::class, 'nhtEditSubmit'])->name('nhtadmin.nhtkhachhang.nhtEditSubmit');
Route::get('/nht-admins/nht-khach-hang/nht-delete/{id}', [nht_KHACH_HANGcontroller::class, 'nhtDelete'])->name('nhtadmin.nhtsanpham.nhtdelete');

Route::get('/nht-admins/nht-hoa-don',[nht_HOA_DONController::class,'nhtList'])->name('nhtadmins.nhthoadon');
Route::get('/nht-admins/nht-hoa-don/nht-detail/{id}', [nht_HOA_DONController::class, 'nhtDetail'])->name('nhtadmin.nhthoadon.nhtDetail');