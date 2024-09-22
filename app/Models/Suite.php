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

    protected $fillable = ['description','avantages','address' , 'classification' , 'prix' , 'image' , 'num_persan'];

    public function reservation(){
        return $this->belongsToMany(Reservaton::class);
    }

    public function checkReserved(string  $a, $id){
        $reservation = Reservaton::where('date_arive', '<=' , $a)
        ->where('date_depart','>=' , $a)
        ->where('suite_id' ,$id )
        ->get();
        $isReserved =count($reservation) == 0 ;
        return $isReserved ;
        } 
}
