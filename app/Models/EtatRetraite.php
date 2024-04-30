<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatRetraite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'echeance_id',
        'num_pension',
        'nom',
        'prenom',
        'type',
        'date_naiss',
        'date_jouis',
        'telephone',
        'titre',
        'montant_trim',
        'montant_comp',
        'montant_comp_plus',
        'est_decede',
        'assignation',
        'assignation1',
        'rip',
        'banque',
        'societe_orig',
        'est_nc',
        'echeance_pre_vrmt',
        'as_avance',
        'montant_avance',
        'nb_periode_avance',
        'remb_pour_nb_periode',
        'pre_ech_remb',
        'der_ech_remb',
        'taux_remb',
        'solde_avance',
        'montant_arriere',
        'trim_du',
        'est_reclation',
        'montant_trim_reval',
        'montant_mens_reval',
        'mappr',
        'af',
        'observation',
        'montant_a_payer',
        'reste_remb',
        'trim_remb',
        'IDPROCURATION',
        'agence',
        'date_motif',
        'date_dcd',
        'date_declaration_dcd',
        'est_suspendu',
        'code_bank',
        'code_agence',
        'cle_rib',
        'status',
        'created_by',
    ];

    protected $table = 'etat_retraites';

    public function echeance() {
        return $this->belongsTo(Echeance::class, 'echeance_id');
    }
}
