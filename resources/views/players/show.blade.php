@extends('app')

@section('title', '英雄聯盟網站 - 顯示單一角色')

@section('lol_contents')

<h1> {{$player -> name}} </h1>

編號:{{$player -> id}} <br/>
職業:{{$player -> profession}} <br/>
所屬區域:{{ $player -> region -> region }}<br/>
使用率:{{$player -> usage_rate}} <br/>
勝率:{{$player -> winning_rate}} <br/>
禁用率:{{$player -> ban_rate}} <br/>
當前造型數量:{{$player -> skin_of_shapes}} <br/>
上市時間:{{$player -> listing_date}} <br/>

@endsection