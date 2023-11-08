<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    private $names = 
    [
        '艾妮維亞', '艾希', '布郎姆',
    ];
    
    private $nameIndex = 0;

    private $professions = 
    [
        '法師', '射手', '輔助',
    ];

    private $professionIndex = 0;

    private $worlds = 
    [
        1, 1, 1,
    ];

    private $worldIndex = 0;

    private $usagerates = 
    [
        2.80, 13.50, 3.20,
    ];

    private $usagerateIndex = 0;

    private $winningrates = 
    [
        50.30, 50.90, 50.40,
    ];

    private $winningrateIndex = 0;

    private $banrates = 
    [
        2.10, 9.20, 0.60,
    ];

    private $banrateIndex = 0;

    private $skinofshapess = 
    [
        14, 17, 16,
    ];

    private $skinofshapesIndex = 0;

    private $listingdates;

    public function __construct()
    {
        $this->listingdates = 
        [
            Carbon::create(2009, 7, 10), Carbon::create(2009, 2, 21), Carbon::create(2014, 5, 12),
        ];

        $this->listingdateIndex = 0;
    }

    private $listingdateIndex = 0;

    public function Name()
    {
        $name = $this->names[$this->nameIndex];
        $this->nameIndex = ($this->nameIndex + 1) % count($this->names);
        return $name;
    }

    public function Profession()
    {
        $profession = $this->professions[$this->professionIndex];
        $this->professionIndex = ($this->professionIndex + 1) % count($this->professions);
        return $profession;
    }

    public function World()
    {
        $world = $this->worlds[$this->worldIndex];
        $this->worldIndex = ($this->worldIndex + 1) % count($this->worlds);
        return $world;
    }

    public function Usagerate()
    {
        $usagerate = $this->usagerates[$this->usagerateIndex];
        $this->usagerateIndex = ($this->usagerateIndex + 1) % count($this->usagerates);
        return $usagerate;
    }

    public function Winningrate()
    {
        $winningrate = $this->winningrates[$this->winningrateIndex];
        $this->winningrateIndex = ($this->winningrateIndex + 1) % count($this->winningrates);
        return $winningrate;
    }

    public function Banrate()
    {
        $banrate = $this->banrates[$this->banrateIndex];
        $this->banrateIndex = ($this->banrateIndex + 1) % count($this->banrates);
        return $banrate;
    }

    public function Skinofshapes()
    {
        $skinofshapes = $this->skinofshapess[$this->skinofshapesIndex];
        $this->skinofshapesIndex = ($this->skinofshapesIndex + 1) % count($this->skinofshapess);
        return $skinofshapes;
    }

    public function Listingdate()
    {
        $listingdate = $this->listingdates[$this->listingdateIndex];
        $this->listingdateIndex = ($this->listingdateIndex + 1) % count($this->listingdates);
        return $listingdate;
    }

    public function run()
    {
        for ($i = 0; $i < 3; $i++)
        {
            DB::table('player')->insert([
                'name' => $this->Name(),
                'profession' => $this->Profession(),
                'world' => $this->World(),
                'usage rate' => $this->Usagerate(),
                'winning rate' => $this->Winningrate(),
                'ban rate' => $this->Banrate(),
                'skin of shapes' => $this->Skinofshapes(),
                'listing date' => $this->Listingdate(),
            ]);
        }
    }
}