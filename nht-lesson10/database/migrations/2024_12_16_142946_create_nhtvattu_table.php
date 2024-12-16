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
        Schema::create('nhtvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('nhtMaVTu')->primary();
            $table->string('nhtTenVTu')->unique();
            $table->string('nhtDvTinh');
            $table->float('nhtPhamTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhtvattu');
    }
};
