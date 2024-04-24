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
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('type_accident');
            $table->string('date_accident');
            $table->string('heure_accident');
            $table->string('agent_materiel');
            $table->string('nature_lesion');
            $table->string('consequence');
            $table->string('nom_temoin');
            $table->string('prenom_temoin');
            $table->string('adresse_temoin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidents');
    }
};