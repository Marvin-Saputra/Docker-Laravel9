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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('nonota_beli',15);
            $table->dateTime('tgl_beli');
            $table->double('total_beli');
            $table->unsignedBigInteger('id_distributor');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_distributor')->references('id')->on('distributor')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
