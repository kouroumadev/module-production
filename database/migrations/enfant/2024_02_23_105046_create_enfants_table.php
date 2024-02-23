<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('wife_id')->constrained('wives');
            $table->string('nom_enfant');
            $table->string('prenom_enfant');
            $table->string('sexe_enfant')->nullable();
            $table->string('date_naissance_enfant')->nullable();
            $table->string('lieu_naissance_enfant')->nullable();
            $table->string('ordre_naissance_enfant')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enfants');
    }
};
