<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decompte extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'miseRetraite_id',
    ];
}
