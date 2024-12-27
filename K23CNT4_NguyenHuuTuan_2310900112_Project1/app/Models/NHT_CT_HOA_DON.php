<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHT_CT_HOA_DON extends Model
{
    use HasFactory;
    protected $table = 'NHT_CT_HOA_DON';
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu nhtnhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
}