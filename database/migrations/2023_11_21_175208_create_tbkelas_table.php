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
        Schema::create('tbkelas', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_kelas');
            $table->string('nama_kelas');
            $table->foreignid('id_tahunakademik')->index()->constrained('tbtahunakademik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbkelas');
    }
};