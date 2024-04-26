<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echeance extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'value',
        'status',
        'created_by',
    ];

    public function retraites() {
        return $this->hasMany(EtatRetraite::class, 'echeance_id');
    }

}
