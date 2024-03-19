<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'employee_id',
        'type',
        'from_dept',
        'to_dept',
        'note',
        'doc_id',
        'transfer_id',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function docs() {
        return $this->belongsTo(Doc::class, 'doc_id');
    }
    public function froms() {
        return $this->belongsTo(Dept::class, 'from_dept');
    }
    public function tos() {
        return $this->belongsTo(Dept::class, 'to_dept');
    }
    public function transfers() {
        return $this->belongsTo(Transfer::class, 'transfer_id');
    }


}
