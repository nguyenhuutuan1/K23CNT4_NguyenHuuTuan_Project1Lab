@extends('_layouts.admins._master')

@section('title','Xem Thông Tin Người Mua Cây Cảnh')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Chi Tiết Đơn Hàng Người Mua Cây Cảnh</h1>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>Mã Hóa Đơn:</b>
                            {{$nhthoadon->nhtMaHoaDon}} 
                        </p>

                        <p class="card-text">
                            <b>Mã Khách Hàng:</b>
                            {{$nhthoadon->nhtMaKhachHang}} 
                        </p>

                        <p class="card-text">
                            <b>Ngày Hóa Đơn:</b>
                            {{$nhthoadon->nhtNgayHoaDon}} 
                        </p>

                        <p class="card-text">
                            <b>Ngày Nhận:</b>
                            {{$nhthoadon->nhtNgayNhan}} 
                        </p>

                        <p class="card-text">
                            <b>Họ Tên Khách Hàng:</b>
                            {{$nhthoadon->nhtHoTenKhachHang}} 
                        </p>

                        <p class="card-text">
                            <b>Email:</b>
                            {{$nhthoadon->nhtEmail}} 
                        </p>

                        <p class="card-text">
                            <b>Điện Thoại:</b>
                            {{$nhthoadon->nhtDienThoai}} 
                        </p>

                        <p class="card-text">
                            <b>Địa Chỉ:</b>
                            {{$nhthoadon->nhtDiaChi}} 
                        </p>

                        <p class="card-text">
                            <b>Tổng Giá Trị:</b>
                            {{number_format($nhthoadon->nhtTongGiaTri, 0, ',', '.')}} VND 
                        </p>

                        <p class="card-text">
                            <b>Trạng Thái:</b>
                            @if($nhthoadon->nhtTrangThai == 0)
                                <span class="badge bg-success">Chờ Sử Lý</span>
                            @elseif($nhthoadon->nhtTrangThai == 1)
                                <span class="badge bg-warning">Đang Sử Lý</span>
                            @else
                                <span class="badge bg-danger">Đã Hoàn Thành</span>
                            @endif 
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('nhtadmins.nhthoadon')}}" class="btn btn-primary"> Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
