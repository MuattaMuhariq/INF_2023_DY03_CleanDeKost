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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('totalharga')->nullable();
            $table->string('botolplastik')->nullable();
            $table->String('botolkaca')->nullable();
            $table->string('kertas')->nullable();
            $table->string('besi')->nullable();
            $table->string('diskon')->nullable();
            $table->string('hargadiskon')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
