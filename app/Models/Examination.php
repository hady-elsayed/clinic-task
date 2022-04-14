<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fees'
    ];

    public function visit()
    {
        return $this->hasOne(Visit::class, 'examination_id');
    }
}
