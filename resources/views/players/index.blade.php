@extends('app')

@section('title', '英雄聯盟網站 - 列出所有角色')

@section('lol_contents')

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
        <th>顯示角色資料</th>
        <th>修改角色資料</th>
        <th>刪除角色資料</th>
    </tr>

    @for($i=0; $i<count($players); $i+2)        
    <tr>
            <td>{{ $players[$i]['id']}}</td>
            <td>{{ $players[$i]['name']}}</td>
            <td>{{ $players[$i]['profession']}}</td>
            <td>{{ $players[$i]['world']}}</td>
            <td>{{ $players[$i]['usage_rate']}}</td>
            <td>{{ $players[$i]['winning_rate']}}</td>
            <td>{{ $players[$i]['ban_rate']}}</td>
            <td>{{ $players[$i]['skin_of_shapes']}}</td>
            <td>{{ $players[$i]['listing_date']}}</td>
            <td><a href="{{ route('players.show', ['id'=>$players[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('players.edit', ['id'=>$players[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>
        </tr>
    @endfor

</table>

@endsection
