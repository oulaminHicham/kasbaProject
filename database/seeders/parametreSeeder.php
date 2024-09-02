<?php

namespace Database\Seeders;

use App\Models\Parametre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class parametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parametre::create([
            'politique' => "notre politique est As you can see in the code above, Ive simply written the process for creating a new user in my users table. Now, you can add your code to create an admin user",
            'about_us' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus et lorem vel maximus. Donec lobortis fringilla feugiat. Fusce eget nulla finibus, convallis nibh ut, dictum arcu. Nulla non feugiat orci. Sed luctus justo quis leo maximus ultrices. Donec sollicitudin elit ac lobortis elementum. Suspendisse eget diam mauris. In sed luctus risus. Proin pulvinar, nisi a fermentum blandit, ligula dolor hendrerit massa, vitae efficitur mauris lacus et nibh. Aliquam erat volutpat. Aenean eu ante neque.",
        ]);
    }
}
