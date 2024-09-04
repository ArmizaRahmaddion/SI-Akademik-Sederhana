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
        Schema::create('tbprodi', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->string('nama');
            $table->string('tglsk');
            $table->string('akreditasi');
            $table->foreignid('id_fakultas')->index()->constrained('tbfakultas');
            $table->foreignid('id_jenjang')->index()->constrained('tbjenjang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbprodi');
    }
};