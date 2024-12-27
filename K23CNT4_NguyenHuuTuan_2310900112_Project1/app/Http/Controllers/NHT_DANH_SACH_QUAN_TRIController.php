<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\NHT_SAN_PHAM; 
use App\Models\NHT_KHACH_HANG; 
class NHT_DANH_SACH_QUAN_TRIController extends Controller
{
    //
        // Danh mục
        public function danhmuc()
        {
            // Truy vấn số lượng sản phẩm
            $productCount = NHT_SAN_PHAM::count();
        
            // Truy vấn số lượng người dùng
            $userCount = NHT_KHACH_HANG::count();

        
            // Trả về view và truyền cả productCount và userCount
            return view('nhtAdmins.nhtdanhsachquantri.nhtdanhmuc', compact('productCount', 'userCount'));
        }

        public function nguoidung()
        {
            $nhtnguoidung = NHT_KHACH_HANG::all();
        
            // Chuyển đổi nhtNgayDangKy thành đối tượng Carbon thủ công
            foreach ($nhtnguoidung as $user) {
                // Chuyển đổi ngày tháng thành đối tượng Carbon nếu chưa phải là Carbon
                $user->nhtNgayDangKy = Carbon::parse($user->nhtNgayDangKy);
            }
        
            return view('nhtAdmins.nhtdanhsachquantri.nhtdanhmuc.nhtnguoidung', ['nhtnguoidung' => $nhtnguoidung]);
        }
        

    // tin tức
    public function tintuc()
    {
        
        $nhtsanphams = NHT_SAN_PHAM::all();
        return view('nhtAdmins.nhtdanhsachquantri.nhtdanhmuc.nhttintuc',['nhtsanphams'=>$nhtsanphams]);
    }

    // Hiển thị danh sách sản phẩm
    public function sanpham()
    {
        $nhtsanphams = NHT_SAN_PHAM::all(); // Lấy tất cả sản phẩm
        return view('nhtAdmins.nhtdanhsachquantri.nhtdanhmuc.nhtsanpham', ['nhtsanphams' => $nhtsanphams]);
    }

    // Hiển thị mô tả chi tiết sản phẩm
    public function mota($id)
    {
        // Lấy sản phẩm theo id
        $product = NHT_SAN_PHAM::find($id);
        
        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->route('nhtAdmins.nhtdanhsachquantri.danhmuc.sanpham')
                             ->with('error', 'Sản phẩm không tồn tại.');
        }

        // Trả về view với thông tin sản phẩm
        return view('nhtAdmins.nhtdanhsachquantri.nhtdanhmuc.nhtmota', ['product' => $product]);
    }
}