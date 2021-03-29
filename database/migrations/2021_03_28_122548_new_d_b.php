<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('fraktur', function (Blueprint $table) {
            $table->id();
            $table->binary('foto');
            $table->timestamps();
        });

        Schema::create('operasional', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->integer('biaya');
            $table->date('tanggal');
            $table->unsignedBigInteger('fraktur_id');
            $table->foreign('fraktur_id')->references('id')->on('fraktur');
            $table->timestamps();
        });

        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 45);
            $table->string('periode', 45);
            $table->string('pemasukan', 45);
            $table->unsignedBigInteger('operasional_id');
            $table->foreign('operasional_id')->references('id')->on('operasional');
            $table->timestamps();
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('metode', 45);
            $table->integer('nominal');
            $table->string('nama', 45);
            $table->string('no_hp', 45);
            $table->timestamps();
        });

        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->string('nohp', 45);
            $table->string('email', 45);
            $table->integer('gaji');
            $table->enum('status', ['1', '0']);
            $table->timestamps();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username', 45);
            $table->string('password', 45);
            $table->string('remember_token', 45);
            $table->enum('status', ['1', '0']);
            $table->unsignedBigInteger('karyawan_id');
            $table->foreign('operasional_id')->references('id')->on('karyawan');
            $table->timestamps();
        });

        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->integer('harga');
            $table->binary('foto');
            $table->enum('status', ['1', '0']);
            $table->timestamps();
        });

        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->integer('sub_total');
            $table->unsignedBigInteger('transaksi_id');
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->timestamps();
        });

        Schema::create('stok_bahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->integer('jumlah');
            $table->date('tgl_beli');
            $table->unsignedBigInteger('fraktur_id');
            $table->foreign('fraktur_id')->references('id')->on('fraktur');
            $table->timestamps();
        });

        Schema::create('resep', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->unsignedBigInteger('stok_bahan_id');
            $table->foreign('stok_bahan_id')->references('id')->on('stok_bahan');
            $table->timestamps();
        });

        Schema::create('stok_jadi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->string('jumlah', 45);
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->unsignedBigInteger('stok_bahan_id');
            $table->timestamps();
        });
    }
}
