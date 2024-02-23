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
        Schema::create('wives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('nom_wife');
            $table->string('prenom_wife');
            $table->string('no_conjoint_wife');
            $table->string('date_mariage_wife');
            $table->string('sexe_wife')->nullable();
            $table->string('date_naissance_wife')->nullable();
            $table->string('lieu_naissance_wife')->nullable();
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
        Schema::dropIfExists('wives');
    }
};
