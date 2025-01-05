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
        Schema::create('pvd_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('pvdmasanpham',300)->unique();
            $table->string('pvdtensanpham',300);
            $table->string('pvdhinhanh',300);
            $table->integer('pvdsoluong');
            $table->float('pvddongia');
            $table->bigInteger('pvdmaloai')->references('id')->on('pvd_loai_san_pham');
            $table->tinyInteger('pvdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pvd_san_pham');
    }
};
