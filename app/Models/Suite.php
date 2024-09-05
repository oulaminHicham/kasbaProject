<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suite extends Model
{
    use HasFactory;
    protected $casts = [
        'avantages' => 'array'
    ];

    protected $fillable = ['description','avantages','address' , 'classification' , 'prix'];

        
}
