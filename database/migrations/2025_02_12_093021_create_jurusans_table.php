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
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jurusan');
            $table->string('akreditasi');
            $table->string('gelar');
            $table->string('penyelenggara');
            $table->string('tgl_berdiri');
            $table->string('judul_ket1');
            $table->longText('deskripsi1');
            $table->string('foto1')->nullable();
            $table->string('judul_ket2');
            $table->longText('deskripsi2');
            $table->string('foto2')->nullable();
            $table->longText('visi');
            $table->longText('misi');
            $table->longText('tujuan')->nullable();
            $table->longText('sasaran')->nullable();
            $table->string('judul_akhir')->nullable();
            $table->string('nanya')->nullable();
            $table->string('url')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
