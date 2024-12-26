@extends('_layouts.admins._master')

@section('title', 'Nhu Cầu Thị Trường Cây Cảnh Hiện Nay')

@section('content-body')
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4" style="font-family: 'Roboto', sans-serif;">Nhu Cầu Thị Trường Cây Cảnh Hiện Nay</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Tên Cây</th>
                    <th scope="col" class="text-center">Độ Tuổi Người Mua</th>
                    <th scope="col" class="text-center">Mục Đích Mua</th>
                    <th scope="col" class="text-center">Loại Cây Ưu Tiên</th>
                    <th scope="col" class="text-center">Thị Trường Mới</th>
                    <th scope="col" class="text-center">Thương Hiệu Phổ Biến</th>
                    <th scope="col" class="text-center">Mức Giá Phổ Biến</th>
                    <th scope="col" class="text-center">Công Nghệ Xu Hướng</th>
                    <th scope="col" class="text-center">Ngày Cập Nhật</th>
                </tr>
            </thead>
            
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>Cây phú quý</td>
                    <td>25-45 tuổi</td>
                    <td>Trang trí, tạo không gian sang trọng</td>
                    <td>Cây phú quý, lá đỏ, lá xanh</td>
                    <td>Châu Á, Đông Nam Á</td>
                    <td>Vietplant, Phú Quý Garden</td>
                    <td>200.000 - 1.000.000 VND</td>
                    <td>Cây dễ chăm sóc, hợp phong thủy</td>
                    <td>25/12/2023</td>
                </tr>

                <tr class="text-center">
                    <td>2</td>
                    <td>Cây đại phú gia</td>
                    <td>30-50 tuổi</td>
                    <td>Phong thủy, tạo không gian xanh</td>
                    <td>Cây đại phú gia, lá to, xanh mướt</td>
                    <td>Châu Á, Việt Nam</td>
                    <td>Hưng Thịnh, Phú Gia Garden</td>
                    <td>300.000 - 1.500.000 VND</td>
                    <td>Cây dễ sống, phù hợp với văn phòng</td>
                    <td>22/12/2023</td>
                </tr>

                <tr class="text-center">
                    <td>3</td>
                    <td>Cây hạnh phúc</td>
                    <td>20-40 tuổi</td>
                    <td>Tặng quà, trang trí nhà cửa</td>
                    <td>Cây hạnh phúc, lá xanh, dễ chăm sóc</td>
                    <td>Châu Á, Đông Nam Á</td>
                    <td>Hạnh Phúc Plants, Hoa Cây Cảnh</td>
                    <td>100.000 - 600.000 VND</td>
                    <td>Cây dễ trồng, mang lại may mắn</td>
                    <td>18/12/2023</td>
                </tr>

                <tr class="text-center">
                    <td>4</td>
                    <td>Cây vạn lộc</td>
                    <td>25-50 tuổi</td>
                    <td>Trang trí, mang lại tài lộc</td>
                    <td>Cây vạn lộc, lá đỏ, lá xanh</td>
                    <td>Châu Á, Đông Nam Á</td>
                    <td>Vạn Lộc Garden, Cây Cảnh Hoàng Anh</td>
                    <td>150.000 - 800.000 VND</td>
                    <td>Cây mang ý nghĩa tài lộc, phong thủy</td>
                    <td>15/12/2023</td>
                </tr>

                <tr class="text-center">
                    <td>5</td>
                    <td>Cây thiết mộc lan</td>
                    <td>25-45 tuổi</td>
                    <td>Trang trí, tạo không gian sống xanh</td>
                    <td>Cây thiết mộc lan, lá dài, dễ chăm sóc</td>
                    <td>Châu Á, Đông Nam Á</td>
                    <td>Cây Cảnh Việt, Thiết Mộc Lan Garden</td>
                    <td>200.000 - 1.200.000 VND</td>
                    <td>Cây dễ trồng, ít phải chăm sóc</td>
                    <td>10/12/2023</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-3">
            <a href="{{ route('nhtAdmins.nhtdanhsachquantri.danhmuc') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection
