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
        Schema::create('mise_retraites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('pension_type');
            $table->string('no_pensionne');
            $table->string('no_bio');
            $table->string('assign_pref_id');
            $table->string('first_job_date');
            $table->string('end_job_date');
            $table->string('annuite');
            $table->string('date_imma');
            $table->string('last_location');
            $table->string('prefecture_id');
            $table->string('socio_profess');
            $table->string('profession');
            $table->string('email');
            $table->string('tel');
            $table->string('sexe');
            $table->string('age');
            $table->string('created_by');
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mise_retraites');
    }
};
