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
        Schema::create('nhtnhacc', function (Blueprint $table) {
            //$table->id();
            $table->string('nhtMaNCC')->primary();
            $table->string('nhtTenNCC');
            $table->string('nhtDiaChi');
            $table->string('nhtDienThoai');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhtnhacc');
    }
};
