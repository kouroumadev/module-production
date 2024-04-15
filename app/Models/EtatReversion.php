<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatReversion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'echeance_id',
        'num_retraite',
        'prenoms',
        'nom',
        'date_de_naiss',
        'date_de_jouiss',
        'titre',
        'montant_trim',
        'assignation',
        'assignation1',
        'aociéte_orig',
        'type',
        'montant_mens_reval',
        'montant_avance',
        'trim_du',
        'pour',
        'solde_avance',
        'montant_arriere',
        'montant_a_paye',
        'ayant_causse',
        'mappr',
        'status',
        'created_by',
    ];

    protected $table = 'etat_reversions';

    public function echeance() {
        return $this->belongsTo(Echeance::class, 'echeance_id');
    }
}
