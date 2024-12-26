@extends('_layouts.admins._master')

@section('title','Danh Sách Người Mua Cây Cảnh')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Người Mua Cây Cảnh</h1>
                <a href="/nht-admins/nht-hoa-don/nht-create" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Khách Hàng</th>
                        <th>Ngày Hóa Đơn</th>
                        <th>Ngày Nhận</th>
                        <th>Họ Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng Giá Trị</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nhthoadons as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->nhtMaHoaDon }}</td> 
                            <td>{{ $item->nhtMaKhachHang }}</td> 
                            <td>{{ $item->nhtNgayHoaDon }}</td> 
                            <td>{{ $item->nhtNgayNhan }}</td> 
                            <td>{{ $item->nhtHoTenKhachHang }}</td> 
                            <td>{{ $item->nhtEmail }}</td> 
                            <td>{{ $item->nhtDienThoai }}</td> 
                            <td>{{ $item->nhtDiaChi }}</td> 
                            <td>{{ number_format($item->nhtTongGiaTri, 0, ',', '.') }} VND</td> 
                            
                            <td>
                                @if($item->nhtTrangThai == 0)
                                    <span class="badge bg-success">Chờ Sử Lý</span>
                                @elseif($item->nhtTrangThai == 1)
                                    <span class="badge bg-warning">Đang Sử Lý</span>
                                @else
                                    <span class="badge bg-danger">Đã Hoàn Thành</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="/nht-admins/nht-hoa-don/nht-detail/{{ $item->id }}" class="btn btn-success btn-sm" title="Xem">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/nht-admins/nht-hoa-don/nht-edit/{{ $item->id }}" class="btn btn-primary btn-sm" title="Chỉnh sửa">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="/nht-admins/nht-hoa-don/nht-delete/{{ $item->id }}" class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Bạn muốn xóa Mã Khách Hàng này không? ID: {{ $item->id }}');" title="Xóa">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center text-muted">
                                Chưa có thông tin người mua cây cảnh
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
