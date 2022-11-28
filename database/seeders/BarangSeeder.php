<?php

namespace Database\Seeders;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'name'     => 'Diadora',
            'merek_id'     => '1',
        ]);
        Barang::create([
            'name'     => 'Nike',
            'merek_id'     => '1',
        ]);
    }
}
