<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    public function RandomName()
    {
        $names =
        [
            '艾妮維亞',
            '艾希',
            '布郎姆',
            '雷茲',
            '費德提克',
            '飛斯',
            '努努和威朗普',
            '弗力貝爾',
            '嘉文四世',
            '葵恩',
        ];

        return $names[rand(0,count($names) - 1)];
    }

    public function RandomProfession()
    {
        $professions =
        [
            '法師',
            '射手',
            '刺客',
            '鬥士',
            '輔助',
            '坦克',
            '牧師',
            '鍛造師',
            '商人',
            '獵人',
        ];

        return $professions[rand(0,count($professions) - 1)];
    }

    private $worldIndex = 0;

    public function RandomUsagerate()
    {
        $usagerates =
        [
            10,20,30,40,50,60,70,80,90,100,
        ];

        return $usagerates[rand(0,count($usagerates) - 1)];
    }

    public function RandomWinningrate()
    {
        $winningrates =
        [
            10,20,30,40,50,60,70,80,90,100,
        ];

        return $winningrates[rand(0,count($winningrates) - 1)];
    }

    public function RandomBanrate()
    {
        $banrates =
        [
            10,20,30,40,50,60,70,80,90,100,
        ];

        return $banrates[rand(0,count($banrates) - 1)];
    }

    public function RandomSkinofshapes()
    {
        $skinofshapes =
        [
            1,2,3,4,5,6,7,8,9,10,
        ];

        return $skinofshapes[rand(0,count($skinofshapes) - 1)];
    }

    public function RandomListingdate()
    {
        $listingdates =
        [
            Carbon::create(2009, 7, 10),
            Carbon::create(2009, 2, 21),
            Carbon::create(2014, 5, 12),
            Carbon::create(2014, 8, 14),
            Carbon::create(2017, 6, 5),
            Carbon::create(2013, 1, 28),
            Carbon::create(2010, 3, 19),
            Carbon::create(2012, 5, 22),
            Carbon::create(2018, 4, 13),
            Carbon::create(2021, 8, 24),
        ];

        return $listingdates[rand(0,count($listingdates) - 1)];
    }

    public function run()
    {
        // 在運行種子之前清空資料表
        DB::table('players')->truncate();

        $now = now(); // 獲取當前時間(UTC)
        $Characters = 30; // 角色總數

        for ($i = 0; $i < $Characters; $i++)
        {
            $name = $this->RandomName();
            $profession = $this->RandomProfession();
            $world = $this->worldIndex = ($this->worldIndex + 1);
            $usagerate = $this->RandomUsagerate();
            $winningrate = $this->RandomWinningrate();
            $banrate = $this->RandomBanrate();
            $skinofshapes = $this->RandomSkinofshapes();
            $listingdate = $this->RandomListingdate();

            DB::table('players')->insert([
                'name' => $name,
                'profession' => $profession,
                'world' => $world,
                'usage_rate' => $usagerate,
                'winning_rate' => $winningrate,
                'ban_rate' => $banrate,
                'skin_of_shapes' => $skinofshapes,
                'listing_date' => $listingdate,

                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}