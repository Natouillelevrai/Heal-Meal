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
        Schema::create('steps', function (Blueprint $table) {
            $table->id('id_step');
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('content');
            $table->unsignedBigInteger('id_recette');
            $table->foreign('id_recette')->references('id_recette')->on('recettes');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steps');
    }
};
