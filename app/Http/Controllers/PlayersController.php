<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Player;
use App\Models\World;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 從 Model 拿資料
        $players = Player::all();

        // 把資料送給 view
        return view('players.index')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
     {
        $worlds = World::orderBy('worlds.id', 'asc')->pluck('worlds.region', 'worlds.id');
        return view('players.create', ['worlds' => $worlds, 'worldSelected' => null]);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

     public function store(Request $request)
     {
        $name = $request->input('name');
        $profession = $request->input('profession');
        $world = $request->input('world');
        $usage_rate = $request->input('usage_rate');
        $winning_rate = $request->input('winning_rate');
        $ban_rate = $request->input('ban_rate');
        $skin_of_shapes = $request->input('skin_of_shapes');
        $listing_date = $request->input('listing_date');

        $player = Player::create([
            'name'=>$name,
            'profession'=>$profession,
            'world'=>$world,
            'usage_rate'=>$usage_rate,
            'winning_rate'=>$winning_rate,
            'ban_rate'=>$ban_rate,
            'skin_of_shapes'=>$skin_of_shapes,
            'listing_date'=>$listing_date]);
        return redirect('players');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */

    public function show($id)
    {
        // 從 Model 拿資料
        $player = Player::findOrFail($id);

        // 把資料送給 view
        return view('players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $worlds = World::orderBy('worlds.id', 'asc')->pluck('worlds.region', 'worlds.id');
        $selected_tags = $player->region->id;
        return view('players.edit', ['player' =>$player, 'worlds' => $worlds, 'worldSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);

        $player->name = $request->input('name');
        $player->profession = $request->input('profession');
        $player->world = $request->input('world');
        $player->usage_rate = $request->input('usage_rate');
        $player->winning_rate = $request->input('winning_rate');
        $player->ban_rate = $request->input('ban_rate');
        $player->skin_of_shapes = $request->input('skin_of_shapes');
        $player->listing_date = $request->input('listing_date');
        $player->save();

        return redirect('players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect('players');
    }
}
