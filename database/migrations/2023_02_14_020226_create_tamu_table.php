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
        Schema::create('Tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->Biginteger('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references ('id') ->on('Kategori')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('alamat');
            $table->integer('no_tlpn');
            $table->date('tanggal');
            $table->text('tujuan');
            $table->time('jam_kedatangan');
            $table->time('jam_keluar')->nullable();
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
        Schema::dropIfExists('tamu');
    }
};
