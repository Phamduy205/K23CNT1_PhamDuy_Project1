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
        Schema::create('pvd_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('pvdmakhachhang',300)->unique();
            $table->string('pvdhotenkhachhang',300);
            $table->string('pvdemail',300);
            $table->string('pvdmatkhau',300);
            $table->string('pvddenthoai',300);
            $table->string('pvddiachi',300);
            $table->date('pvdngaydangky');
            $table->tinyInteger('pvdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pvd_khach_hang');
    }
};
