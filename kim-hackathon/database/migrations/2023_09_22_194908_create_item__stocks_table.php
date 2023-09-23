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
        Schema::create('item__stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('umkm_id')->constrained('umkms')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama_item');
            $table->integer('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item__stocks');
    }
};
