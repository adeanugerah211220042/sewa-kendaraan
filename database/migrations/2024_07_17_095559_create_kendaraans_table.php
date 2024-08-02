<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->string('no_pol', 10)->primary();
            $table->string('no_mesin', 20)->unique();
            $table->enum('jenis_mobil', ['mpv', 'city', 'suv']);
            $table->string('nama_mobil', 40);
            $table->enum('merk', ['honda', 'toyota', 'daihatsu']);
            $table->string('kapasitas', 5);
            $table->integer('tarif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
