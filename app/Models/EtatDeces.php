<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatDeces extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'etat_retraite_id',
        'created_by',
    ];

    public function retraite() {
        return $this->belongsTo(EtatRetraite::class, 'etat_retraite_id','id');
    }
}
