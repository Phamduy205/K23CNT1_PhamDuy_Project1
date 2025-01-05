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
        Schema::create('pvd_loai_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('pvdmaloai',300)->unique();
            $table->string('pvdtenloai',300);
            $table->tinyInteger('pvdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pvd_loai_san_pham');
    }
};
