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
        Schema::create('pvd_quan_tri', function (Blueprint $table) {
            $table->id();
            $table->string('pvdtaikhoan',300)->unique();
            $table->string('pvdmatkhau',300);
            $table->tinyInteger('pvdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pvd_quan_tri');
    }
};
