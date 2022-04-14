<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable=[
        'diagnosis',
        'prescription',
        'lab_or_tests',
        'patient_id',
        'examination_id',
        'date_id'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function examinations()
    {
        return $this->belongsTo(Examination::class, 'examination_id');
    }

    public function date()
    {
        return $this->belongsTo(Date::class, 'date_id');
    }

    public function procedures(){
        return $this->belongsToMany(Procedure::class,'procedures_visits','visit_id');
    }
}
