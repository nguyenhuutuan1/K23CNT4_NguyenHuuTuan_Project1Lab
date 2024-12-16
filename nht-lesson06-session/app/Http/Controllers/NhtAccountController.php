<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhtAccountController extends Controller
{
    public function nhtLogin()
    {
        return view('nht-login');
    }

    //#form login - post (khi đăng nhập)
    /*
        Kiểm tra email,mật khẩu không để trống 
        Nếu email = nht@gmail.com và pass = 123a@ thì lưu thông tin vào session
        với tên như ví dụ trước
    */  
    public function nhtLoginSubmit(Request $request)
    {
        // validation
        $validation = $request->validate([
            'nhtEmail' => 'required|email',
            'nhtPass' => 'required|min:6'
        ]);
        // check login -> store session -> redirect home 
        $nhtEmail = $request->input('nhtEmail');
        $nhtPass = $request->input('nhtPass');
        
        $nhtLoginSession = [
            'nhtEmail'=>$nhtEmail,
            'nhtPass'=>$nhtPass
        ];

        $nht_json = json_encode($nhtLoginSession);

        if($nhtEmail == "nht@gmail.com" && $nhtPass=="123456a@")
        {
            //Lưu session
            $request->session()->put('K23CNT4-NguyenHuuTuanK23CNT4-NguyenHuuTuan    ', $nhtEmail);
            return redirect('/');
        }

        return redirect()->back()->with('nht-error','Lỗi đăng nhập');
    }
}
    