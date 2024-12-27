<?php

namespace App\Http\Controllers;

use App\Models\NHT_QUAN_TRI; // Thêm dòng này để sử dụng Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Thêm dòng này để sử dụng session

class NHT_QUAN_TRIController extends Controller
{
    public function nhtLogin()
    {
        return view('nhtAdmins.nht-login');
    }

   public function nhtLoginSubmit(Request $request)
    {

        $request->validate([
            'nhtTaiKhoan' => 'required|string',
            'nhtMatKhau' => 'required|string',
        ]);

        $user = NHT_QUAN_TRI::where('nhtTaiKhoan', $request->nhtTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->nhtMatKhau, $user->nhtMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->nhtTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/nht-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['nhtMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

    public function nhtlist()
{
    $nhtquantris = NHT_QUAN_TRI::all(); // Lấy tất cả quản trị viên
    return view('nhtAdmins.nhtquantri.nht-list', ['nhtquantris'=>$nhtquantris]);
}

public function nhtDetail($id)
    {
        $nhtquantri = NHT_QUAN_TRI::where('id', $id)->first();
        return view('nhtAdmins.nhtquantri.nht-detail',['nhtquantri'=>$nhtquantri]);

    }

    //create
    // GET: Hiển thị form thêm mới quản trị viên
public function nhtCreate()
{
    return view('nhtAdmins.nhtquantri.nht-create');
}

// POST: Xử lý form thêm mới quản trị viên
public function nhtCreateSubmit(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'nhtTaiKhoan' => 'required|string|unique:nht_quan_tri,nhtTaiKhoan',
        'nhtMatKhau' => 'required|string|min:6',
        'nhtTrangThai' => 'required|in:0,1', 
    ]);

    // Tạo bản ghi mới trong cơ sở dữ liệu
    $nhtquantri = new NHT_QUAN_TRI();
    $nhtquantri->nhtTaiKhoan = $request->nhtTaiKhoan;
    $nhtquantri->nhtMatKhau = Hash::make($request->nhtMatKhau); // Mã hóa mật khẩu
    $nhtquantri->nhtTrangThai = $request->nhtTrangThai;
    $nhtquantri->save();

    // Chuyển hướng về trang danh sách với thông báo thành công
    return redirect()->route('nhtadmins.nhtquantri')->with('success', 'Thêm quản trị viên thành công');
}

// edit
// GET: Hiển thị form chỉnh sửa quản trị viên
public function nhtEdit($id)
{
    $nhtquantri = NHT_QUAN_TRI::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
    if (!$nhtquantri) {
        return redirect()->route('nhtadmins.nhtquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }
    return view('nhtAdmins.nhtquantri.nht-edit', ['nhtquantri'=>$nhtquantri]);
}

// POST: Xử lý form chỉnh sửa quản trị viên
public function nhtEditSubmit(Request $request, $id)
{
    // Xác thực dữ liệu
    $request->validate([
        'nhtTaiKhoan' => 'required|string|unique:nht_quan_tri,nhtTaiKhoan,' . $id,
        'nhtMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
        'nhtTrangThai' => 'required|in:0,1',
    ]);

    // Lấy quản trị viên cần sửa
    $nhtquantri = NHT_QUAN_TRI::find($id);
    if (!$nhtquantri) {
        return redirect()->route('nhtadmins.nhtquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }

    // Cập nhật thông tin
    $nhtquantri->nhtTaiKhoan = $request->nhtTaiKhoan;
    if ($request->nhtMatKhau) {
        $nhtquantri->nhtMatKhau = Hash::make($request->nhtMatKhau); // Cập nhật mật khẩu nếu có
    }
    $nhtquantri->nhtTrangThai = $request->nhtTrangThai;
    $nhtquantri->save();

    return redirect()->route('nhtadmins.nhtquantri')->with('success', 'Cập nhật quản trị viên thành công');
}

// delete
public function nhtDelete($id)
{
    $nhtquantri = NHT_QUAN_TRI::find($id); // Tìm quản trị viên cần xóa
    if (!$nhtquantri) {
        return redirect()->route('nhtadmins.nhtquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }
    $nhtquantri->delete(); // Xóa bản ghi

    return redirect()->route('nhtadmins.nhtquantri')->with('success', 'Xóa quản trị viên thành công');
}



}