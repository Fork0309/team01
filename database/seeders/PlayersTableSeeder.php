<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('player')->insert([
            'name' => '艾妮維亞',
            'profession' => '法師',
            'world' => 1,
            'usage rate' => 2.80,
            'winning rate' => 50.30,
            'ban rate' => 2.10,
            'skin of shapes' => 14,
            'listing date' => Carbon::create(2009, 7, 10),
        ]);
    }
}
