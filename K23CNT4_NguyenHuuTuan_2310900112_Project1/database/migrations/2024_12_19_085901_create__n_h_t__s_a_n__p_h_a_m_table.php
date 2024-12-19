<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('NHT_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nhtMaSanPham',255)->unique();
            $table->string('nhtTenSanPham',255);
            $table->string('nhtHinhAnh',255);
            $table->integer('nhtSoLuong');
            $table->float('nhtDonGia');
            $table->bigInteger('nhtMaLoai')->references('id')->on('NHT_LOAI-SAN_PHAM');
            $table->tinyInteger('nhtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHT_SAN_PHAM');
    }
};
