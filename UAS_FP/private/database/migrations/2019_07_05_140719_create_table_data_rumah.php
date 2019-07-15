<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataRumah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_data_rumah', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('image');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('alamat');
            $table->string('harga');
            $table->string('deskripsi');
            $table->tinyInteger('deleted')->default('0');
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
        Schema::dropIfExists('table_data_rumah');
    }
}
