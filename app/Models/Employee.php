<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_ima',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'prefecture',
        'tel',
        'adresse',
        'situation_matri',
        'created_by',
        'status'
    ];

    public function employers() {
        return $this->hasMany(Employer::class, 'employee_id');
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
