<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fk_ingredient_regime', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ingredient');
            $table->unsignedBigInteger('id_regime')->nullable();
            $table->foreign('id_ingredient')->references('id_ingredient')->on('ingredients');
            $table->foreign('id_regime')->references('id_regime')->on('regime');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fk_ingredient_regimes');
    }
};
