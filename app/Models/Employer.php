<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_employer',
        'raison_sociale',
        'category',
        'created_by',
        'status'
    ];

    public function employees() {
        return $this->hasMany(Employee::class, 'employer_id','id');
    }
}
