<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    protected $fillable =[
        'date',
        'time'
    ];

    public function visits()
    {
        return $this->hasOne(Visit::class, 'date_id');
    }
}
