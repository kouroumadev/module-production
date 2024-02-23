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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('no_ima');
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->string('lieu_naissance')->nullable();
            $table->string('prefecture')->nullable();
            $table->string('tel')->nullable();
            $table->string('adresse')->nullable();
            $table->string('situation_matri');
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
        Schema::dropIfExists('employees');
    }
};
