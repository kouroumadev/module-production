<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;



    public function prestation() {
        return $this->belongsTo(Prestation::class, 'prestation_id');
    }

}
