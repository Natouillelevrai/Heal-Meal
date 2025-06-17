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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id('id_favorites');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_recette');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_recette')->references('id_recette')->on('recettes');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};