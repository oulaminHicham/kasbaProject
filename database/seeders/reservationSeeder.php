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
            
                'fullName'=>'0001' ,
                'email'=>'email@gmail.com' ,
                'price'=>100 ,
                // 'adress'=>'adres1 adres dffjf' ,
                'details'=>'i want ot see all what what you have' ,
                'suite_id'=>Suite::inRandomOrder()->first()->id
            
        ]);
    }
}
