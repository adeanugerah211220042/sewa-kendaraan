<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kwitansi');
            $table->unsignedBigInteger('id_penyewa');
            $table->string('no_pol', 10);
            $table->timestamps();

            $table->foreign('id_kwitansi')->references('id')->on('kwitansis')->onDelete('cascade');
            $table->foreign('id_penyewa')->references('id')->on('penyewas')->onDelete('cascade');
            $table->foreign('no_pol')->references('no_pol')->on('kendaraans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
