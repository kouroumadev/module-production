<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'dept_id',
        'name',

    ];

    protected $table = 'deadlines';

    public function departs() {
        return $this->belongsTo(Dept::class, 'dept_id');
    }
}
