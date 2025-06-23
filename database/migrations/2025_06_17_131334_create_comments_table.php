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
        Schema::create('comment', function (Blueprint $table) {
            $table->id('id_comment');
            $table->mediumText('content');
            $table->unsignedBigInteger('id_recettes');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_recettes')->references('id_recette')->on('recettes');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
