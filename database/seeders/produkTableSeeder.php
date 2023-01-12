<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert(array(['nama' => 'Meja', 'id_kategori' => '1', 'qty' =>
        '12', 'harga_beli' => '50000', 'harga_jual' => '540000',], ['nama' => 'Kursi', 'id_kategori'
        => '1', 'qty' => '12', 'harga_beli' => '40000', 'harga_jual' => '450000',]));
    }
}
