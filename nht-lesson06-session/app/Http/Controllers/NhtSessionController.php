<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhtSessionController extends Controller
{
    //#Đọc dữ liệu từng session
    public function nhtGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT4_NguyenHuuTuan"))
        {
            echo "<h2> Session Data:". $request->session()->get("K23CNT4_NguyenHuuTuan"); 
        }else {
            echo "<h2> Không có dữ liệu nào trong sesion </h2>";
        }
    }

    //#Ghi dữ liệu vào session
    public function nhtStoreSessionData(Request $request)
    {
        // Lưu 
        $request->session()->put('K23CNT4_NguyenHuuTuan','K23CNT4 - Nguyễn Hữu Tuấn - 23108900112');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }

    //# Xóa dữ liệu trong session
    public function nhtDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT4_NguyenHuuTuan');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    } 
}
