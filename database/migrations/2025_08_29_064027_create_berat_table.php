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
        Schema::create('berat', function (Blueprint $table) {
            $table->id('id_berat');
            $table->unsignedBigInteger('id_domba');
            $table->string('rfid_tag');
            $table->date('tanggal_timbang');
            $table->float('berat_domba');

            $table->foreign('id_domba')->references('id_domba')->on('dombas')->onDelete('set null');
            $table->foreign('rfid_tag')->references('rfid_tag')->on('dombas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berat');
    }
};
