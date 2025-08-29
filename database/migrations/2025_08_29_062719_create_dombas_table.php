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
        Schema::create('dombas', function (Blueprint $table) {
            $table->id('id_domba');
            $table->string('rfid_tag');
            $table->string('nama_domba');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->unsignedBigInteger('id_induk')->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dombas');
    }
};
