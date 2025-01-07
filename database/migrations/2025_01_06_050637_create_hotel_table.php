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
        Schema::create('Hotel', function (Blueprint $table) {
            $table->id('id_Pemesanan');
            $table->string('Nama_Tamu');
            $table->string('Tipe_Kamar');
            $table->string('Tanggal_Check_in');
            $table->string('Tanggal_Check_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Hotel');
    }
};
