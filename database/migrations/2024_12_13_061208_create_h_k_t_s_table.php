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
        Schema::create('hkts', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->year('tahun_surat');
            $table->unsignedBigInteger('kode_klasifikasi_id');
            $table->string('perihal');
            $table->text('uraian_informasi');
            $table->unsignedBigInteger('tingkat_informasi_id');
            $table->unsignedBigInteger('lokasi_arsip_id');
            $table->integer('retensi');
            $table->string('keterangan')->nullable();
            $table->unsignedBigInteger('nasib_akhir_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_k_t_s');
    }
};

