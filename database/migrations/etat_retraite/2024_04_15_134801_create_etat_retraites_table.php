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
        Schema::create('etat_retraites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('echeance_id')->constrained('echeances');
            $table->string('num_pension')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('type')->nullable();
            $table->string('date_naiss')->nullable();
            $table->string('date_jouis')->nullable();
            $table->string('telephone')->nullable();
            $table->string('titre')->nullable();
            $table->string('montant_trim')->nullable();
            $table->string('montant_comp')->default(0);
            $table->string('montant_comp_plus')->default(0);
            $table->string('est_decede')->default('0');
            $table->string('assignation')->nullable();
            $table->string('assignation1')->nullable();
            $table->string('rip')->nullable();
            $table->string('banque')->nullable();
            $table->string('societe_orig')->nullable();
            $table->string('est_nc')->nullable('1');
            $table->string('echeance_pre_vrmt')->nullable();
            $table->string('as_avance')->default('0');
            $table->string('montant_avance')->default(0);
            $table->string('nb_periode_avance')->default('0');
            $table->string('remb_pour_nb_periode')->default('0');
            $table->string('pre_ech_remb')->nullable();
            $table->string('der_ech_remb')->nullable();
            $table->string('taux_remb')->nullable();
            $table->string('solde_avance')->default(0);
            $table->string('montant_arriere')->default(0);
            $table->string('trim_du')->default(0);
            $table->string('est_reclation')->default('0');
            $table->string('montant_trim_reval')->default(0);
            $table->string('mappr')->default(0);
            $table->string('af')->default(0);
            $table->string('observation')->nullable();
            $table->string('montant_a_payer')->default(0);
            $table->string('reste_remb')->default(0);
            $table->string('trim_remb')->default(0);
            $table->string('IDPROCURATION')->nullable();
            $table->string('agence')->nullable();
            $table->string('date_motif')->nullable();
            $table->string('date_dcd')->nullable();
            $table->string('date_declaration_dcd')->nullable();
            $table->string('est_suspendu')->nullable();
            $table->string('code_bank')->nullable();
            $table->string('code_agence')->nullable();
            $table->string('cle_rib')->nullable();
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
        Schema::dropIfExists('etat_retraites');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
