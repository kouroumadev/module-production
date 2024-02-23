<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_id',
        'wife_id',
        'nom_enfant',
        'prenom_enfant',
        'sexe_enfant',
        'date_naissance_enfant',
        'lieu_naissance_enfant',
        'ordre_naissance_enfant',
        'created_by',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function wife() {
        return $this->belongsTo(Wife::class, 'wife_id');
    }
}
