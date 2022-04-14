<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'fees',
        'procedure_id'
    ];

    public function visit(){
        return $this->belongsToMany(Visit::class,'procedures_visits','procedure_id');
    }
}
