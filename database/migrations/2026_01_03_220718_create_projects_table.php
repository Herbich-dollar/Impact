<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title'); // Titre du projet
            $table->text('description'); // Description détaillée
            $table->decimal('goal_amount', 15, 2)->nullable(); // Objectif financier
            $table->decimal('raised_amount', 15, 2)->default(0); // Montant collecté
            $table->string('status')->default('En cours'); // En cours / Terminé
            $table->string('image')->nullable(); // ✅ Image du projet

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
