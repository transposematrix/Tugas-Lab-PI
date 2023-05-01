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
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('no_telp');
            $table->string('jenis_pekerjaan');
            $table->string('domisili');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
