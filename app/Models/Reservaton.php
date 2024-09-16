<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaton extends Model
{
    use HasFactory;
    protected $fillable = ['fullName','price','email' ,'payment_status' , 'details' , 'suite_id'];

}
