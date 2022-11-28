<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merek;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merek::create([
            'name'     => 'Sepatu',
        ]);
        
    }
}
