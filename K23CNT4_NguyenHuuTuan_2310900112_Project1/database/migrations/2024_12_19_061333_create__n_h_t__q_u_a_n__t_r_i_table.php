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
        Schema::create('NHT_QUAN_TRI', function (Blueprint $table) {
            $table->id() ;
            $table->string('nhtTaiKhoan',255)->unique();
             $table->string('nhtMatKhau',255);
             $table->tinyInteger('nhtTrangthai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHT_QUAN_TRI');
    }
};
