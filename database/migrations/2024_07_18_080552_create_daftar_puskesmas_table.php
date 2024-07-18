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
        Schema::create('daftar_puskesmas', function (Blueprint $table) {
            $table->bigIncrements('id_puskesmas');
            $table->string('nama_puskesmas');
            $table->string('alamat_puskesmas');

            $table->primary('id_puskesmas');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_puskesmas');
    }
};
