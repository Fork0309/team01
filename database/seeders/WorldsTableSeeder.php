<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class WorldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('world')->insert([
            'region' => '弗雷爾卓德',
            'rule' => '母系部落',
            'attitude' => '崇敬',
            'technology' => '低',
            'environment' => '冰霜覆蓋的苔原',
        ]);
    }
}
