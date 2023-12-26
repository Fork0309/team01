@extends('app')

@section('title', '英雄聯盟網站 - 顯示單一區域')

@section('lol_contents')

<h1>{{ $world->region }}的所有角色</h1>

<table>
    <tr>
        <th>角色編號</th>
        <th>角色名稱</th>
        <th>角色職業</th>
        <th>所屬區域</th>
        <th>使用率</th>
        <th>勝率</th>
        <th>禁用率</th>
        <th>當前造型數量</th>
        <th>上市時間</th>
    </tr>

    @foreach ($players as $player)
        <tr>
            <td>{{ $player -> id}}</td>
            <td>{{ $player -> name}}</td>
            <td>{{ $player -> profession}}</td>
            <td>{{ $player -> region -> region }}</td>
            <td>{{ $player -> usage_rate}}</td>
            <td>{{ $player -> winning_rate}}</td>
            <td>{{ $player -> ban_rate}}</td>
            <td>{{ $player -> skin_of_shapes}}</td>
            <td>{{ $player -> listing_date}}</td>
            
        </tr>
    @endforeach
<table>

@endsection