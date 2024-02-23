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
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'lieu_naissance',
        'created_by',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
