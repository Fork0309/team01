<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\World;

class WorldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 從 Model 拿資料
        $worlds = World::all();

        // 把資料送給 view
        return view('worlds.index')->with('worlds', $worlds);
    }

    public function show($id)
    {
        // 從 Model 拿資料
        $world = World::findOrFail($id);
        $players = $world->players;

        // 把資料送給 view  
        return view('worlds.show', ['world'=>$world, 'players'=>$players]);
    }

    public function edit($id)
    {
        //
        return World::findOrFail($id)->toArray();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $world = World::findOrFail($id);
        $world->delete();
        return redirect('worlds');
    }
}
