@extends('_layouts.admins._master')

@section('title', 'Danh Mục Sản Phẩm')

@section('content-body')
    <div class="container mt-4">
        <h1 class="mb-4 text-center text-primary">Danh Mục Sản Phẩm</h1>

        <div class="row d-flex align-items-stretch">
            @foreach($vtdsanphams as $plant)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light h-100">
                        <img src="{{ asset('storage/' . $plant->nhtHinhAnh) }}" alt="Sản phẩm {{ $plant->nhtMaSanPham }}" class="card-img-top" style="height: 350px; object-fit: cover;">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <h5 class="card-title text-dark" style="font-family: 'Roboto', sans-serif;">{{ $plant->vtdTenSanPham }}</h5>
                            <p class="card-text" style="font-size: 1rem; color: #333;"><strong>Giá:</strong> {{ number_format($plant->nhtDonGia, 0, ',', '.') }} VND</p>
                            <a href="{{ route('nhtAdmins.nhtdanhsachquantri.danhmuc.mota', ['id' => $plant->id]) }}" class="btn btn-primary mt-2">Mô Tả</a>
                            <a href="#" class="btn btn-danger mt-2">Xóa</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection