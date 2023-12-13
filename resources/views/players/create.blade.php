@extends('app')

@section('title', '英雄聯盟網站 - 新增角色資料')

@section('lol_theme', '新增角色資料')

@section('lol_contents')

    {!! Form::open(['url' => 'players/store']) !!}
        @include('players.form', ['submitButtonText'=>"新增角色資料"])
    {!! Form::close() !!}

@endsection