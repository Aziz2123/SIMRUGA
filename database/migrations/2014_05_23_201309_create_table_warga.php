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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_kk');
            // $table->unsignedBigInteger('id_rt');
            // $table->foreign('id_kk')->references('id')->on('kartu_keluarga')->onDelete('cascade');
            // $table->foreign('id_rt')->references('id')->on('rt')->onDelete('cascade');
            $table->foreignId('id_kk')->constrained('kartu_keluarga')->onDelete('cascade');
            $table->foreignId('id_rt')->constrained('rt');
            $table->string('nama_warga', 255);
            $table->string('alamat', 255);
            $table->string('no_telepon', 25);
            $table->string('NIK', 25);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->string('status_kawin', 25);
            $table->string('pekerjaan', 255);
            $table->string('foto_warga')->nullable();
            $table->string('status_kepemilikan_rumah');
            $table->string('sumber_air_bersih');
            $table->integer('token_listrik');
            $table->integer('jumlah_anggota_keluarga');
            $table->integer('penghasilan');
            $table->integer('tanggungan');
            $table->string('jenis_warga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_warga');
    }
};
