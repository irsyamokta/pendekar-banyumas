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
        Schema::create('instrumen_sdq', function (Blueprint $table) {
            $table->bigIncrements('id_sdq');
            $table->text('pertanyaan');
            $table->timestamps();

            $table->primary('id_sdq');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrumen_sdq');
    }
};
