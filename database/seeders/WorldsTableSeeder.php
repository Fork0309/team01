<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldsTableSeeder extends Seeder
{
    private $regions = 
    [
        '弗雷爾卓德', '蒂瑪西亞', '諾克薩斯',
    ];
    
    private $regionIndex = 0;

    private $rules = 
    [
        '母系部落', '封建君主制', '崇尚擴張主義的帝國',
    ];

    private $ruleIndex = 0;

    private $attitudes = 
    [
        '崇敬', '抵制', '武器化',
    ];
    
    private $attitudeIndex = 0;

    private $technologys = 
    [
        '低', '中', '中',
    ];
    
    private $technologyIndex = 0;

    private $environments = 
    [
        '冰霜覆蓋的苔原', '富饒的農村', '貧瘠的平原',
    ];
    
    private $environmentIndex = 0;

    public function Region()
    {
        $region = $this->regions[$this->regionIndex];
        $this->regionIndex = ($this->regionIndex + 1) % count($this->regions);
        return $region;
    }

    public function Rule()
    {
        $rule = $this->rules[$this->ruleIndex];
        $this->ruleIndex = ($this->ruleIndex + 1) % count($this->rules);
        return $rule;
    }

    public function Attitude()
    {
        $attitude = $this->attitudes[$this->attitudeIndex];
        $this->attitudeIndex = ($this->attitudeIndex + 1) % count($this->attitudes);
        return $attitude;
    }

    public function Technology()
    {
        $technology = $this->technologys[$this->technologyIndex];
        $this->technologyIndex = ($this->technologyIndex + 1) % count($this->technologys);
        return $technology;
    }

    public function Environment()
    {
        $environment = $this->environments[$this->environmentIndex];
        $this->environmentIndex = ($this->environmentIndex + 1) % count($this->environments);
        return $environment;
    }

    public function run()
    {
        // 在運行種子之前清空資料表
        DB::table('world')->truncate();

        $now = now(); // 獲取當前時間(UTC)
        $Worlds = 14; // 區域總數

        for ($i = 0; $i < $Worlds; $i++)
        {
            DB::table('world')->insert([
                'region' => $this->Region(),
                'rule' => $this->Rule(),
                'attitude' => $this->Attitude(),
                'technology' => $this->Technology(),
                'environment' => $this->Environment(),

                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
