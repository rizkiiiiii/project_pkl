<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_merk');
            $table->string('tipe');
            $table->string('deskripsi');
            $table->string('gambar');
            $table->string('harga');
            $table->timestamps();

            $table->foreign('id_merk')
                  ->references('id')
                  ->on('merks')
                  ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}
