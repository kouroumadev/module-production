<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decompte extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'mise_retraite_id',
        'mont_moy_mens',
        'mont_mens_pens',
        'pens_trimes',
        'montant_arr',
        'mont_revalo',
        'montant_tot_pens',
        'montant_tot_first_pay',
        'nbre_mois_tot',
        'prescription',
        'solde_compte',
        'mont_annu_pension',
        'created_by',
        'status',
    ];
}
