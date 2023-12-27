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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->unsignedBigInteger('id_pembayaran');
            $table->foreign('id_pembayaran')->references('id')->on('metode_pembayaran');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_pengiriman')->nullable();
            $table->foreign('id_pengiriman')->references('id')->on('pengiriman');
            $table->dateTime('tgl_pemesanan');
            $table->dateTime('tgl_pembayaran');
            $table->dateTime('tgl_pengiriman');
            $table->integer('jumlah_pemesanan');
            $table->integer('total_pembayaran');
            $table->string('alamat_pengiriman',50);
            $table->text('deskripsi_pemesanan')->nullable();
            $table->boolean('status');
            //Status 0 = belum dibayar
            //Status 1 = proses kirim
            //Status 2 = selesai

            // $table->boolean('status_pemesanan');
            // $table->boolean('status_pengiriman');
            // $table->string('no_pembayaran',5);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
