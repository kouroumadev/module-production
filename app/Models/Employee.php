<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employer_id',
        'no_ima_employee',
        'nom_employee',
        'prenom_employee',
        'date_naissance_employee',
        'lieu_naissance_employee',
        'prefecture_employee',
        'tel_employee',
        'adresse_employee',
        'situation_matri_employee',
        'type_pension',
        'photo',
        'created_by',
        'status',
        'created_at',
        'code_employe',
        'date_jour',
        'date_embauche',
        'date_etabl_cin',
        'date_immatriculation',
        'datemodification',
        'employeur_id',
        'lieu_etab_cin',
        'nationalite',
        'date_created',
        'no_cin',
        'nom_mere',
        'nom_pere',
        'pays_id',
        'prefecture',
        'prenom_mere',
        'prenom_pere',
        'no_employeur',
        'profession',
        'sexe',
        'situationpro',
        'statut',
        'statut_employe_id',
        'adresse',
        'anciencode_employeur',
        'ancien_num_employe',
        'datesortie',
        'tag_rattrapage',
        'user_id',
        'categorie_id',
        'tag_retraite',
        'tag_deces',
        'tag_invalidite',
        'tag_compte_indiv',
        'tag_statut',
        'tag_famille',
        'prefecture_id',
        'code_prefecture',
        'pref_id',
        'agen_id',
        'agencecode_id',
        'tag_allocfam',
        'tag_famille_pf',
        'tag_allocprepost',
        'tag_ijcongemat',
        'tag_alloc_chomage',
        'tag_allocataire_pf',
        'tag_retraite',
        'no_dossier',
        'email_employee',
        'age_reel_deces',
        'assignation_id',
        'date_deces',
        'no_acte_deces',
        'tag_famille_rp',
        'tag_rente_deces',
        'tag_suspension',
        'matricule',

    ];

    protected $cast = [
      'date_naissance_employee' => 'datetime'
    ];

    public function employer() {
        return $this->belongsTo(Employer::class, 'employer_id','id');
    }
    public function wifes() {
        return $this->hasMany(Wife::class, 'employee_id');
    }
    public function enfants() {
        return $this->hasMany(Enfant::class, 'employee_id');
    }
    public function deposants() {
        return $this->hasMany(Deposant::class, 'employee_id');
    }
    public function docs() {
        return $this->hasMany(Doc::class, 'employee_id');
    }
    public function transfers() {
        return $this->hasMany(Transfer::class, 'employee_id');
    }
}
