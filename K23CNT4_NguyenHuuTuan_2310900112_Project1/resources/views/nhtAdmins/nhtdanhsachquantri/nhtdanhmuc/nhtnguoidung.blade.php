@extends('_layouts.admins._master')

@section('title', 'Danh Sách Người Mua Cây Cảnh')

@section('content-body')
    <div class="container mt-4">
        <h1 class="mb-4 text-center text-primary">Danh Sách Người Mua Cây Cảnh</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Tên Người Mua</th>
                    <th scope="col" class="text-center">Số Điện Thoại</th>
                    <th scope="col" class="text-center">Tên Cây Mua</th>
                    <th scope="col" class="text-center">Số Lượng</th>
                    <th scope="col" class="text-center">Ngày Mua</th>
                    <th scope="col" class="text-center">Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nguoimua as $index => $mua)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">{{ $mua->ten_nguoi_mua }}</td> 
                        <td class="text-center">{{ $mua->so_dien_thoai }}</td> 
                        <td class="text-center">{{ $mua->ten_cay }}</td> 
                        <td class="text-center">{{ $mua->so_luong }}</td> 
                        <td class="text-center">{{ $mua->ngay_mua->format('d/m/Y') }}</td> 
                        <td class="text-center">
                            @if($mua->trang_thai == 0)
                                <span class="badge bg-success">Đã Hoàn Tất</span>
                            @elseif($mua->trang_thai == 1)
                                <span class="badge bg-warning">Chờ Xử Lý</span>
                            @else
                                <span class="badge bg-danger">Hủy Đơn</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('nhtAdmins.nhtdanhsachquantri.danhmuc') }}" class="btn btn-secondary mt-3">Quay lại</a>
    </div>
@endsection
