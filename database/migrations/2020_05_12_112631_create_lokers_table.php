<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokers', function (Blueprint $table) {
            $table->Increments('id_loker');
            $table->string('judul');
            $table->text('content');
            $table->string('gambar'); 
            $table->integer('id');
            $table->integer('id_exp');
            $table->integer('id_kabupaten');
            $table->integer('id_category');
            $table->integer('id_pendidikan');
            $table->integer('id_sistem');
            $table->integer('id_gaji');
            $table->integer('id_komp');
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
        Schema::dropIfExists('lokers');
    }
}
