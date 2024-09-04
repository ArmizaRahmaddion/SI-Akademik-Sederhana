<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbjadwal', function (Blueprint $table) {
            $table->id();
            $table->string('jammasuk');
            $table->string('jamkeluar');
            $table->foreignId('id_hari')->index()->constrained('tbhari');
            $table->foreignId('id_ruangan')->index()->constrained('tbruangan');
            $table->foreignId('id_dosen')->index()->constrained('tbdosen');
            $table->foreignId('id_kelas')->index()->constrained('tbkelas');
            $table->foreignId('id_matakuliah')->index()->constrained('tbmatakuliah');
            $table->foreignId('id_tahunakademik')->index()->constrained('tbtahunakademik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbjadwal');
    }
};