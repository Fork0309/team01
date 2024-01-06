@extends('app')

@section('title', '英雄聯盟網站 - 更新區域資料')

@section('lol_theme', '更新區域資料')

@section('lol_contents')
    @include('message.list')
    {!! Form::model($world, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\WorldsController@update', $world->id]]) !!}
    @include('worlds.form', ['submitButtonText'=>"更新區域資料"])
    {!! Form::close() !!}

@endsection