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
        Schema::create('fk_recettes_ingredients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recette');
            $table->unsignedBigInteger('id_ingredient');
            $table->integer('quantity');
            $table->unsignedBigInteger('id_unit')->nullable();

            $table->foreign('id_recette')->references('id_recette')->on('recettes')->onDelete('cascade');
            $table->foreign('id_ingredient')->references('id_ingredient')->on('ingredients');
            $table->foreign('id_unit')->references('id_unit')->on('units');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fk_recette_ingredients');
    }
};
