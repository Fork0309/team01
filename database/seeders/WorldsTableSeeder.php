<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldsTableSeeder extends Seeder
{   
    public function RandomRegion()
    {
        $regions =
        [
            '弗雷爾卓德',
            '蒂瑪西亞',
            '諾克薩斯',
            '艾歐尼亞',
            '皮爾托福',
            '左恩',
            '比爾及沃特',
            '伊克斯塔爾',
            '蘇瑞瑪',
            '巨石峰',
        ];

        return $regions[rand(0,count($regions) - 1)];
    }

    public function RandomRule()
    {
        $rules =
        [
            '母系部落',
            '封建君主制',
            '崇尚擴張主義的帝國 ',
            '區域省份',
            '氏族統治',
        ];

        return $rules[rand(0,count($rules) - 1)];
    }

    public function RandomAttitude()
    {
        $attitudes =
        [
            '崇敬',
            '抵制',
            '武器化',
            '和諧',
            '商業化',
        ];

        return $attitudes[rand(0,count($attitudes) - 1)];
    }

    public function RandomTechnology()
    {
        $technologys =
        [
            '低',
            '中',
            '高',
            '未知',
        ];

        return $technologys[rand(0,count($technologys) - 1)];
    }

    public function RandomEnvironment()
    {
        $environments =
        [
            '冰霜覆蓋的苔原',
            '富饒的農村',
            '貧瘠的平原',
            '多樣的魔法',
            '沿海都市',
        ];

        return $environments[rand(0,count($environments) - 1)];
    }

    public function run()
    {
        // 在運行種子之前清空資料表
        //DB::table('worlds')->truncate();

        $now = now(); // 獲取當前時間(UTC)
        $Worlds = 30; // 區域總數

        for ($i = 0; $i < $Worlds; $i++)
        {
            $region = $this->RandomRegion();
            $rule = $this->RandomRule();
            $attitude = $this->Randomattitude();
            $technology = $this->Randomtechnology();
            $environment = $this->Randomenvironment();

            DB::table('worlds')->insert([
                'region' => $region,
                'rule' => $rule,
                'attitude' => $attitude,
                'technology' => $technology,
                'environment' => $environment,

                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
