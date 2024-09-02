<?php

namespace Database\Seeders;

use App\Models\Suite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class suiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suite::create([
            
                'description'=>'descreptio 1' ,
                'avantages'=>['av1' , 'av2' , 'av3'],
                'classification'=>'class 1'
            
        ]);
    }
}
