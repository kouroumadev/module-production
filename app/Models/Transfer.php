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
        'user_id',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function doc() {
        return $this->belongsTo(Doc::class, 'doc_id');
    }
    public function from() {
        return $this->belongsTo(Dept::class, 'from_dept');
    }
    public function to() {
        return $this->belongsTo(Dept::class, 'to_dept');
    }
    public function transfer() {
        return $this->belongsTo(Transfer::class, 'transfer_id');
    }

    public function users() {
        return $this->belongsTo(Transfer::class, 'user_id');
    }


}
