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
            $table->string('code_employe')->nullable();
            $table->string('date_jour')->nullable();
            $table->string('date_embauche')->nullable();
            $table->string('date_etabl_cin')->nullable();
            $table->string('date_immatriculation')->nullable();
            $table->string('datemodification')->nullable();
            $table->string('employeur_id')->nullable();
            $table->string('lieu_etab_cin')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('date_created')->nullable();
            $table->string('no_cin')->nullable();
            $table->string('nom_mere')->nullable();
            $table->string('nom_pere')->nullable();
            $table->string('pays_id')->nullable();
            $table->string('prefecture')->nullable();
            $table->string('prenom_mere')->nullable();
            $table->string('prenom_pere')->nullable();
            $table->string('profession')->nullable();
            $table->string('sexe')->nullable();
            $table->string('situationpro')->nullable();
            $table->string('statut')->nullable();
            $table->string('statut_employe_id')->nullable();
            $table->string('adresse')->nullable();
            $table->string('anciencode_employeur')->nullable();
            $table->string('ancien_num_employe')->nullable();
            $table->string('datesortie')->nullable();
            $table->string('tag_rattrapage')->nullable();
            $table->string('user_id')->nullable();
            $table->string('categorie_id')->nullable();
            $table->integer('tag_retraite')->nullable();
            $table->integer('tag_deces')->nullable();
            $table->integer('tag_invalidite')->nullable();
            $table->integer('tag_compte_indiv')->nullable();
            $table->integer('tag_statut')->nullable();
            $table->integer('tag_famille')->nullable();
            $table->string('prefecture_id')->nullable();
            $table->string('code_prefecture')->nullable();
            $table->string('pref_id')->nullable();
            $table->string('agen_id')->nullable();
            $table->string('agencecode_id')->nullable();
            $table->integer('tag_allocfam')->nullable();
            $table->integer('tag_famille_pf')->nullable();
            $table->integer('tag_allocprepost')->nullable();
            $table->integer('tag_ijcongemat')->nullable();
            $table->integer('tag_alloc_chomage')->nullable();
            $table->integer('tag_allocataire_pf')->nullable();
            $table->string('age_reel_deces')->nullable();
            $table->string('assignation_id')->nullable();
            $table->string('date_deces')->nullable();
            $table->integer('no_acte_deces')->nullable();
            $table->integer('tag_famille_rp')->nullable();
            $table->integer('tag_rente_deces')->nullable();
            $table->integer('tag_suspension')->nullable();
            $table->string('matricule')->nullable();
            $table->string('no_employeur')->nullable();
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
            $table->integer('status')->default('1');
            $table->integer('no_dossier')->nullable();
            $table->string('email_employee')->nullable();
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
