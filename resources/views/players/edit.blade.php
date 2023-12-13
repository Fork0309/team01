@extends('app')

@section('title', '英雄聯盟網站 - 修改角色資料')

@section('lol_theme', '修改角色資料')

@section('lol_contents')

    {!! Form::model($player, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PlayersController@update', $player->id]]) !!}
    @include('players.form', ['submitButtonText'=>"更新角色資料"])
    {!! Form::close() !!}

@endsection