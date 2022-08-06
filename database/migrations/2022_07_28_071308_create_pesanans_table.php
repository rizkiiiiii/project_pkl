<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesan');
            $table->unsignedBigInteger('id_mobil');
            $table->date('tanggal_pesanan');
            $table->enum('status_pemesanan', ['Tertunda', 'Berhasil', 'Gagal']);

            $table->foreign('id_pemesan')
                ->references('id')
                ->on('pemesans')
                ->onDelete('CASCADE');

            $table->foreign('id_mobil')
                ->references('id')
                ->on('mobils')
                ->onDelete('CASCADE');

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
        Schema::dropIfExists('pesanans');
    }
}
