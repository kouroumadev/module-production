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
        Schema::create('deposants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('nom_deposant');
            $table->string('prenom_deposant');
            $table->string('telephone_deposant')->nullable();
            $table->string('adresse_deposant')->nullable();
            $table->string('cin_deposant')->nullable();
            $table->string('email_deposant')->nullable();
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
        Schema::dropIfExists('deposants');
    }
};
