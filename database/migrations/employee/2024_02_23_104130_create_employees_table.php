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
            $table->foreignId('employer_id')->constrained('employers');
            $table->string('no_ima_employee');
            $table->string('nom_employee');
            $table->string('prenom_employee');
            $table->string('date_naissance_employee');
            $table->string('lieu_naissance_employee')->nullable();
            $table->string('prefecture_employee')->nullable();
            $table->string('tel_employee')->nullable();
            $table->string('adresse_employee')->nullable();
            $table->string('situation_matri_employee');
            $table->string('type_pension')->nullable();
            $table->string('photo');
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
