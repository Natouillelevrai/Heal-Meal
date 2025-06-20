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
        Schema::create('allergene_ingredient', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_allergene');
            $table->unsignedBigInteger('id_ingredient');
            $table->timestamps();

            $table->foreign('id_allergene')->references('id_allergenes')->on('allergenes')->onDelete('cascade');
            $table->foreign('id_ingredient')->references('id_ingredient')->on('ingredients')->onDelete('cascade');

            $table->unique(['id_allergene', 'id_ingredient']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergene_ingredient');
    }
};
