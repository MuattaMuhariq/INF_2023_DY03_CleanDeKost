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
        Schema::create('orders' , function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('waktu')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('NoHp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};