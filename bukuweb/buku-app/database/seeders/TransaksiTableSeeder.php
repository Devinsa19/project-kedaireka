<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            // 'books_id' => "Novel",
            'no_faktur'    => "38928",
            'jumlah'       => "4",
            'harga'        => "20000",
            'total'        => "80000"
        ]);
    }
}
