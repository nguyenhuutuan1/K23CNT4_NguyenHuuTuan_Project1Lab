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
        Schema::create('nhtdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhtnhtSoDH')->primary();
            $table->date('nhtNgayDH');
            $table->string('nhtMaNCC');
            $table->foreign('nhtMaNCC')->references('nhtMaNCC')->on('nhtnhacc');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhtdondh');
    }
};
