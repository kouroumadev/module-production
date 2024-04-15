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
        'num_retraite',
        'prenoms',
        'nom',
        'date_de_naiss',
        'date_de_jouiss',
        'titre',
        'montant_trim',
        'montant_comp',
        'assignation',
        'assignation1',
        'aociéte_orig',
        'type',
        'montant_mens_reval',
        'montant_avance',
        'trim_du',
        'pour',
        'montant_arriere',
        'AF',
        'montant_a_paye',
        'mappr',
        'status',
        'created_by',
    ];

    protected $table = 'etat_retraites';

    public function echeance() {
        return $this->belongsTo(Echeance::class, 'echeance_id');
    }
}
