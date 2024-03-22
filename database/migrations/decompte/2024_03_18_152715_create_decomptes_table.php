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
        Schema::create('decomptes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('mise_retraite_id')->constrained();
            $table->string('sal_moy_mens')->nullable();
            $table->string('mont_mens_pens')->nullable();
            $table->string('pens_trimes')->nullable();
            $table->string('montant_arr')->nullable();
            $table->string('mont_revalo')->nullable();
            $table->string('montant_tot_pens')->nullable();
            $table->string('montant_tot_first_pay')->nullable();
            $table->string('nbre_mois_tot')->nullable();
            $table->string('prescription')->nullable();
            $table->string('solde_compte')->nullable();
            $table->string('mont_annu_pension')->nullable();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('decomptes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
