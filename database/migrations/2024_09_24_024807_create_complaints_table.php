<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('ruangan');
            $table->string('nama_pelapor');
            $table->string('sumber_laporan');
            $table->string('topik');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->string('pic');
            $table->date('tanggal_selesai');
            $table->time('waktu_selesai');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
