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
        Schema::create('recettes', function (Blueprint $table) {
            $table->id('id_recette');
            $table->string('name');
            $table->string('image');
            $table->longText('desc');
            $table->unsignedBigInteger('id_origine');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_origine')->references('id_origine')->on('origins');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recettes');
    }
};
