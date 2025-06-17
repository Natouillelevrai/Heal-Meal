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
        Schema::create('fk_recettes_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recette')->nullable();
            $table->unsignedBigInteger('id_tag')->nullable();
            $table->foreign('id_recette')->references('id_recette')->on('recettes');
            $table->foreign('id_tag')->references('id_tag')->on('tags');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_f_k_recettes_tags');
    }
};
