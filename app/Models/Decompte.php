<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decompte extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_id',
        'mise_retraite_id',
        'sal_moy_mens',
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

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id','id');
    }

    public function miseRetraite() {
        return $this->belongsTo(MiseRetraite::class, 'mise_retraite_id','id');
    }
}
