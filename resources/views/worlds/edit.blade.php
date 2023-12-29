@extends('app')

@section('title', '英雄聯盟網站 - 更新區域資料')

@section('lol_theme', '更新區域資料')

@section('lol_contents')
<<<<<<< HEAD
    @include('message.list')
    {!! Form::model($world, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\WorldsController@update', $world->id]]) !!}
    @include('worlds.form', ['submitButtonText'=>"更新區域資料"])
=======

    {!! Form::model($world, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\WorldsController@update', $world->id]]) !!}
        @include('worlds.form', ['submitButtonText'=>"更新區域資料"])
>>>>>>> f5c6776d5ca91305d8339cedbe2b43c5cdb77979
    {!! Form::close() !!}

@endsection