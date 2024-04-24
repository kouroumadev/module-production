<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_id',
        'type_accident',
        'date_accident',
        'heure_accident',
        'agent_materiel',
        'nature_lesion',
        'consequence',
        'nom_temoin',
        'prenom_temoin',
        'adresse_temoin',

    ];

    protected $table = 'accidents';

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
