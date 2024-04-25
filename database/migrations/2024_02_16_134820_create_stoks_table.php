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
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constarained()
            ->cascadeOnDelete()
            ->noActionOnUpdate();
            $table->string('nama_suplier');
            $table->unsignedInteger('jumlah');
            $table->date('tanggal');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('stoks');
    }
};