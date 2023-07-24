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
        Schema::create('pasang_surut', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("terbit");
            $table->string("transit");
            $table->string("terbenam");
            $table->string("durasi_siang");
            $table->string("pasang_surut");
            $table->string("ketinggian_surut");
            $table->string("koefisien_surut");
            $table->string("pasang_naik");
            $table->string("ketinggian_naik");
            $table->string("koefisien_naik");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasang_surut');
    }
};
