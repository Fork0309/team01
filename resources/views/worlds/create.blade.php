@extends('app')

@section('title', '英雄聯盟網站 - 新增區域資料')

@section('lol_theme', '新增區域資料')

@section('lol_contents')

    {!! Form::open(['url' => 'worlds/store']) !!}
    @include('worlds.form', ['submitButtonText'=>"新增區域資料"])
    {!! Form::close() !!}

@endsection