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
        Schema::create('nhtctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nhtSoDH');
            $table->string('nhtMaVTu');
            $table->integer('nhtSLDat');
            // Tạo khóa chính trên 2 cột (nhtSoDH, nhtMaVTu)
            $table->primary(['nhtSoDH','nhtMaVTu']);
            // Khóa ngoại
            $table->foreign('nhtSoDH')->references('nhtSoDH')->on('nhtdondn');
            $table->foreign('nhtMaVTu')->references('nhtMaVTu')->on('nhtvattu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhtctdondh');
    }
};
