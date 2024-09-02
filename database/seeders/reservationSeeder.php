<?php

namespace Database\Seeders;

use App\Models\Reservaton;
use App\Models\Suite;
use Illuminate\Database\Seeder;

class reservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservaton::create([
            
                'firstName'=>'0001' ,
                'lastName'=>'001' ,
                'phone'=>'12345678' ,
                'email'=>'email@gmail.com' ,
                'adress'=>'adres1 adres dffjf' ,
                'details'=>'i want ot see all what what you have' ,
                'suite_id'=>Suite::inRandomOrder()->first()->id
            
        ]);
    }
}
