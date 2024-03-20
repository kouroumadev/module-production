<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->json('data')->nullable();
            $table->json('type_doc')->nullable();
            $table->string('level')->nullable();
            $table->string('created_by')->nullable();
            $table->string('transfer_id')->nullable();
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('docs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
