@extends('app')

@section('title', '英雄聯盟網站 - 新增區域資料')

@section('lol_theme', '新增區域資料')

@section('lol_contents')
<<<<<<< HEAD
    @include('message.list')
    {!! Form::open(['url' => 'worlds/store']) !!}
    @include('worlds.form', ['submitButtonText'=>"新增區域資料"])
=======

    {!! Form::open(['url' => 'worlds/store']) !!}
        @include('worlds.form', ['submitButtonText'=>"新增區域資料"])
>>>>>>> f5c6776d5ca91305d8339cedbe2b43c5cdb77979
    {!! Form::close() !!}

@endsection