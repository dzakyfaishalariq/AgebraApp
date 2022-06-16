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
        Schema::create('pengajars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('nip');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('password');
            $table->string('foto');
            $table->string('nama_foto');
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
        Schema::dropIfExists('pengajars');
    }
};
