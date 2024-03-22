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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('type')->nullable();
            $table->string('from_dept')->nullable();
            $table->string('to_dept')->nullable();
            $table->string('note')->nullable();
            $table->string('doc_id')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('transfers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
