<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VrstadokumentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vrstas')->insert([
            'naziv' => "Lična karta",
            'trajanje' => 25
        ]);
        DB::table('vrstas')->insert([
            'naziv' => "Pasoš",
            'trajanje' => 40
        ]);
        DB::table('vrstas')->insert([
            'naziv' => "Vozačka dozvola",
            'trajanje' => 15
        ]);
    }
}
