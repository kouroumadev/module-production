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
        Schema::create('etat_reversions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('echeance_id')->constrained('echeances');
            $table->string('num_retraite')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('nom')->nullable();
            $table->string('date_de_naiss')->nullable();
            $table->string('date_de_jouiss')->nullable();
            $table->string('titre')->nullable();
            $table->string('montant_trim')->nullable();
            $table->string('montant_comp')->nullable();
            $table->string('assignation')->nullable();
            $table->string('assignation1')->nullable();
            $table->string('aociéte_orig')->nullable();
            $table->string('type')->nullable();
            $table->string('montant_mens_reval')->nullable();
            $table->string('montant_avance')->nullable();
            $table->string('trim_du')->nullable();
            $table->string('pour')->nullable();
            $table->string('solde_avance')->nullable();
            $table->string('montant_arriere')->nullable();
            $table->string('montant_a_paye')->nullable();
            $table->string('ayant_causse')->nullable();
            $table->string('mappr')->nullable();
            $table->string('status')->default('1');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('etat_reversions');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
