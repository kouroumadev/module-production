<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiseRetraite extends Model
{
    use HasFactory;

    protected $fillable = [
            'id',
            'employee_id',
            'pension_type',
            'no_pensionne',
            'no_bio',
            'assign_pref_id',
            'first_job_date',
            'end_job_date',
            'annuite',
            'date_imma',
            'last_location',
            'prefecture_id',
            'socio_profess',
            'profession',
            'email',
            'tel',
            'sexe',
            'age',
            'created_by',
            'status'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

}
