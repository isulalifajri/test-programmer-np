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
        Schema::create('entry_sales', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_dok');
            $table->unsignedBigInteger('gudang_id');
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('barang_id');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('gudang_id')->references('id')->on('gudangs')->onDelete('cascade');
            $table->foreign('pelanggan_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entry_sales');
    }
};
