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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id('id_ingredient');
            $table->string('name', 50);
            $table->enum('type', [
                'Fruit et legume',
                'Féculent',
                'Viande',
                'Poisson',
                'Oeuf',
                'Fruit de mer',
                'Produit laitier',
                'Matiere grasse',
                'Produit sucrée',
                'Boissons',
                'Autre'
            ]);
            $table->integer('Cal')->nullable();
            $table->integer('Lip')->nullable();
            $table->integer('Prot')->nullable();
            $table->integer('Glu')->nullable();
            $table->integer('Mac_nut')->nullable();
            $table->integer('Mic_nut')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
