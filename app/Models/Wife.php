<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wife extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_id',
        'nom_wife',
        'prenom_wife',
        'no_conjoint_wife',
        'date_mariage_wife',
        'date_naissance_wife',
        'lieu_naissance_wife',
        'created_by',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function enfants() {
        return $this->hasMany(Enfant::class, 'wife_id','id');
    }


}
