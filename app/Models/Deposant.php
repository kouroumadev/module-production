<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_id',
        'nom_deposant',
        'prenom_deposant',
        'telephone_deposant',
        'adresse_deposant',
        'cin_deposant',
        'email_deposant',
        'created_by',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
