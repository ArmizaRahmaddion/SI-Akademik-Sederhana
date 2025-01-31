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
        Schema::create('tbfakultas', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_fakultas');
            $table->string('nama_fakultas');
            $table->foreignid('id_dekan')->index()->constrained('tbfakultas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbfakultas');
    }
};