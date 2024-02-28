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
        'created_at'
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
}
