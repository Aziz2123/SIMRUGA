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
        Schema::create('pembayaran_iuran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kk');
            $table->unsignedBigInteger('id_iuran');
            $table->date('tanggal');
            $table->integer('jumlah_pembayaran');
            // Define foreign key constraints
            $table->foreign('id_kk')->references('id')->on('kartu_keluarga')->onDelete('cascade');
            $table->foreign('id_iuran')->references('id')->on('jenis_iuran')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_iuran');
    }
};
