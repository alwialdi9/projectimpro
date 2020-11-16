<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_data_event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_event');
            $table->string('email');
            $table->string('surat_pengantar');
            $table->string('proposal_acara');
            $table->string('proposal_keramaian');
            $table->text('deskripsi_event');
            $table->date('mulai_acara');
            $table->date('akhir_acara');
            $table->string('lokasi');
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
        Schema::dropIfExists('data_event');
    }
}
