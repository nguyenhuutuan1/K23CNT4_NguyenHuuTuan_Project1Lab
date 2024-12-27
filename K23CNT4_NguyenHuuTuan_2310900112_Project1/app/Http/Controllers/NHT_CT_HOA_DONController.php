<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NHT_CT_HOA_DON; 
use App\Models\NHT_SAN_PHAM; 
use App\Models\NHT_HOA_DON; 

class nht_CT_HOA_DONController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhtList()
    {
        $nhtcthoadons = NHT_CT_HOA_DON::all();
        return view('nhtAdmins.nhtcthoadon.nht-list',['nhtcthoadons'=>$nhtcthoadons]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhtDetail($id)
    {
        // Tìm sản phẩm theo ID
        $nhtcthoadon = NHT_CT_HOA_DON::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('nhtAdmins.nhtcthoadon.nht-detail', ['nhtcthoadon' => $nhtcthoadon]);
    }

     // create-----------------------------------------------------------------------------------------------------------------------------------------
     public function nhtCreate()
     {
         $nhthoadon = NHT_HOA_DON::all();
         $nhtsanpham = NHT_SAN_PHAM::all();
         return view('nhtAdmins.nhtcthoadon.nht-create',['nhthoadon'=>$nhthoadon,'nhtsanpham'=>$nhtsanpham]);
     }
     //post-----------------------------------------------------------------------------------------------------------------------------------------
     public function nhtCreateSubmit(Request $request)
     {
         // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
         $validate = $request->validate([
             'nhtHoaDonID' => 'required|exists:nht_hoa_don,id',
             'nhtSanPhamID' => 'required|exists:nht_san_pham,id',
             'nhtSoLuongMua' => 'required|numeric',  
             'nhtDonGiaMua' => 'required|numeric',
             'nhtThanhTien' => 'required|numeric',  
             'nhtTrangThai' => 'required|in:0,1,2',
         ]);
     
         // Tạo một bản ghi hóa đơn mới
         $nhtcthoadon = new NHT_CT_HOA_DON;
     
         // Gán dữ liệu xác thực vào các thuộc tính của mô hình
         $nhtcthoadon->nhtHoaDonID = $request->nhtHoaDonID;
         $nhtcthoadon->nhtSanPhamID = $request->nhtSanPhamID;  
         $nhtcthoadon->nhtSoLuongMua = $request->nhtSoLuongMua;
         $nhtcthoadon->nhtDonGiaMua = $request->nhtDonGiaMua;
         $nhtcthoadon->nhtThanhTien = $request->nhtThanhTien;
         $nhtcthoadon->nhtTrangThai = $request->nhtTrangThai;
     
        
     
         // Lưu bản ghi mới vào cơ sở dữ liệu
         $nhtcthoadon->save();
     
         // Chuyển hướng đến danh sách hóa đơn
         return redirect()->route('nhtadmins.nhtcthoadon');
     }

      // edit-----------------------------------------------------------------------------------------------------------------------------------------
      public function nhtEdit($id)
{
    $nhthoadon = NHT_HOA_DON::all(); // Lấy tất cả các hóa đơn
    $nhtsanpham = NHT_SAN_PHAM::all(); // Lấy tất cả các sản phẩm

    // Lấy chi tiết hóa đơn cần chỉnh sửa
    $nhtcthoadon = NHT_CT_HOA_DON::where('id', $id)->first();

    if (!$nhtcthoadon) {
        // Nếu không tìm thấy chi tiết hóa đơn, chuyển hướng với thông báo lỗi
        return redirect()->route('nhtadmins.nhtcthoadon')->with('error', 'Không tìm thấy chi tiết hóa đơn!');
    }

    // Trả về view với dữ liệu
    return view('nhtAdmins.nhtcthoadon.nht-edit', [
        'nhthoadon' => $nhthoadon,
        'nhtsanpham' => $nhtsanpham,
        'nhtcthoadon' => $nhtcthoadon
    ]);
}

      //post-----------------------------------------------------------------------------------------------------------------------------------------
      public function nhtEditSubmit(Request $request,$id)
      {
          // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
          $validate = $request->validate([
              'nhtHoaDonID' => 'required|exists:nht_hoa_don,id',
              'nhtSanPhamID' => 'required|exists:nht_san_pham,id',
              'nhtSoLuongMua' => 'required|numeric',  
              'nhtDonGiaMua' => 'required|numeric',
              'nhtThanhTien' => 'required|numeric',  
              'nhtTrangThai' => 'required|in:0,1,2',
          ]);
         
      
          // Tạo một bản ghi hóa đơn mới
          $nhtcthoadon = NHT_CT_HOA_DON::where('id', $id)->first();
      
          // Gán dữ liệu xác thực vào các thuộc tính của mô hình
          $nhtcthoadon->nhtHoaDonID = $request->nhtHoaDonID;
          $nhtcthoadon->nhtSanPhamID = $request->nhtSanPhamID;  
          $nhtcthoadon->nhtSoLuongMua = $request->nhtSoLuongMua;
          $nhtcthoadon->nhtDonGiaMua = $request->nhtDonGiaMua;
          $nhtcthoadon->nhtThanhTien = $request->nhtThanhTien;
          $nhtcthoadon->nhtTrangThai = $request->nhtTrangThai;
      
         
      
          // Lưu bản ghi mới vào cơ sở dữ liệu
          $nhtcthoadon->save();
      
          // Chuyển hướng đến danh sách hóa đơn
          return redirect()->route('nhtadmins.nhtcthoadon');
      }

        //delete
        public function nhtDelete($id)
        {
            NHT_CT_HOA_DON::where('id',$id)->delete();
            return back()->with('cthoadon_deleted','Đã xóa Khách hàng thành công!');
        }
     
}