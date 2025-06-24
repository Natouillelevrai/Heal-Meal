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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');

            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('username', 20)->unique();
            $table->date('birth');

            $table->string('email')->unique();
            $table->string('password');
            $table->enum('regime', ['', 'omnivore', 'vegetarien', 'vegan','sans-gluten']);
            $table->enum('objectif', ['', 'perte-poids', 'prise-masse', 'maintien']);
            $table->rememberToken();

            $table->unsignedBigInteger('id_roles');
            $table->foreign('id_roles')->references('id_role')->on('roles');

            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
