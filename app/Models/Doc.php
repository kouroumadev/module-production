<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Doc extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_id',
        'data',
        'type_doc',
        'level',
        'no_dossier',
        'created_by',
        'transfer_id',
        'status'
    ];



     protected $casts = [
         'data' => 'array',
     ];


    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function transfers() {
        return $this->belongsTo(Transfer::class, 'transfer_id');
    }
}
