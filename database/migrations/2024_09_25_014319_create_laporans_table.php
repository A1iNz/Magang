<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();  // Primary Key
            $table->string('description');  // Deskripsi pengaduan
            $table->string('category');  // Kategori pengaduan
            $table->string('status')->default('pending');  // Status pengaduan (pending, in-progress, completed)
            $table->unsignedBigInteger('user_id');  // Referensi ke user yang melaporkan
            $table->timestamps();  // Kolom created_at dan updated_at

            // Definisi foreign key ke tabel users (pastikan ada tabel users)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
