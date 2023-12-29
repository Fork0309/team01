<?php

namespace App\Http\Controllers;

use App\Models\World;
use App\Http\Requests\CreateWorldRequest;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('worlds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(CreateWorldRequest $request)
    {
        $region = $request->input('region');
        $rule = $request->input('rule');
        $attitude = $request->input('attitude');
        $technology = $request->input('technology');
        $environment = $request->input('environment');

        $world = World::create([
            'region'=>$region,
            'rule'=>$rule,
            'attitude'=>$attitude,
            'technology'=>$technology,
            'environment'=>$environment]);
        return redirect('worlds');
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
        $world = World::findOrFail($id);
        $players = $world->players;

        // 把資料送給 view  
        return view('worlds.show', ['world'=>$world, 'players'=>$players]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $world = World::findOrFail($id);
        return view('worlds.edit', ['world' =>$world]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(CreateWorldRequest $request, $id)
    {
        $world = World::findOrFail($id);

        $world->region = $request->input('region');
        $world->rule = $request->input('rule');
        $world->attitude = $request->input('attitude');
        $world->technology = $request->input('technology');
        $world->environment = $request->input('environment');
        $world->save();

        return redirect('worlds');
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
