<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHT_KHACH_HANG extends Model
{
    use HasFactory;
    protected $table = 'NHT_KHACH_HANG';
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu nhtnhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
     // Chỉ định các trường ngày tháng sẽ tự động chuyển thành đối tượng Carbon
     protected $dates = ['nhtNgayDangKy'];
}