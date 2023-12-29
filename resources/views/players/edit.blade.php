@extends('app')

@section('title', '英雄聯盟網站 - 更新角色資料')

@section('lol_theme', '更新角色資料')

@section('lol_contents')
<<<<<<< HEAD
    @include('message.list')
    {!! Form::model($player, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PlayersController@update', $player->id]]) !!}
    @include('players.form', ['submitButtonText'=>"更新角色資料"])
=======

    {!! Form::model($player, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PlayersController@update', $player->id]]) !!}
        @include('players.form', ['submitButtonText'=>"更新角色資料"])
>>>>>>> f5c6776d5ca91305d8339cedbe2b43c5cdb77979
    {!! Form::close() !!}

@endsection