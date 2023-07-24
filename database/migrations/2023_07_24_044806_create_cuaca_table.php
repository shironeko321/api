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
        Schema::create('cuaca', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tgl_cuaca_id");
            $table->string("waktu_cuaca");
            $table->string("kondisi_cuaca");
            $table->string("suhu_cuaca");
            $table->string("persentase_hujan_cuaca");
            $table->string("arah_angin_cuaca");
            $table->timestamps();
            $table->foreign("tgl_cuaca_id")->references("id")->on("tgl_cuaca")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuaca');
    }
};
