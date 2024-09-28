<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('description'); // Kolom untuk deskripsi
            $table->string('category'); // Kolom untuk kategori
            $table->enum('status', ['active', 'inactive']); // Kolom untuk status
            $table->unsignedBigInteger('user_id'); // Kolom untuk foreign key ke tabel users
            $table->string('pic'); // Kolom untuk menyimpan gambar atau foto
            $table->timestamps();

            // Menambahkan foreign key constraint ke kolom user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboards');
    }
};