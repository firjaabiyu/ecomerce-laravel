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
        Schema::create('toko', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nama_toko');
            $table->enum('category', ['elektronik', 'otomotif', 'baju', 'makanan', 'aksesoris', 'furnitur', 'obat', 'perabotan']);
            $table->text('desk_toko');
            $table->date('hari_kerja');
            $table->date('hari_tutup');
            $table->time('jam_kerja');
            $table->time('jam_tutup');
            $table->boolean('status')->default('0');
            $table->string('icn_toko')->default('toko.png');
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
};
