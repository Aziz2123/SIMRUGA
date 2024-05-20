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
        if (!Schema::hasTable('nik_kk')) {
            Schema::create('nik_kk', function (Blueprint $table) {
                $table->id('id_NIK_KK');
                $table->string('NIK_KK', 255);
                $table->string('alamat', 50);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nik_kk');
    }
};
