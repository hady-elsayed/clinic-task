<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'age',
        'address',
        'phone'
    ];

    public function visits()
    {
        return $this->hasMany(Visit::class, 'patient_id');
    }
}
