@extends('app')

@section('title', '英雄聯盟網站 - 列出所有區域')

@section('lol_contents')

<table>

    <tr>
        <th>區域編號</th>
        <th>區域</th>
        <th>統治</th>
        <th>對於魔法的態度</th>
        <th>科技水平</th>
        <th>整體環境</th>
        <th>顯示該區域資料</th>
        <th>修改該區域資料</th>
        <th>刪除該區域資料</th>
    </tr>

    @for($i=0; $i<count($worlds); $i++)
        <tr>
            <td>{{ $worlds[$i]['id'] }}</td>
            <td>{{ $worlds[$i]['region'] }}</td>
            <td>{{ $worlds[$i]['rule'] }}</td>
            <td>{{ $worlds[$i]['attitude'] }}</td>
            <td>{{ $worlds[$i]['technology'] }}</td>
            <td>{{ $worlds[$i]['environment'] }}</td>
            <td><a href="{{ route('worlds.show', ['id'=>$worlds[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('worlds.edit', ['id'=>$worlds[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor

<table>

@endsection