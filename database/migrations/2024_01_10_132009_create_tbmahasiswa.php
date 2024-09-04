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
        Schema::create('tbmahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('nohp');
            $table->foreignId('id_pa')->index()->constrained('tbdosen');
            $table->foreignId('id_prodi')->index()->constrained('tbprodi');
            $table->foreignid('id_fakultas')->index()->constrained('tbfakultas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbmahasiswa');
    }
};