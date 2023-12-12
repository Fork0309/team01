@extends('app')

@section('title', '英雄聯盟網站 - 列出所有角色')

@section('lol_contents')

<table>

    <h1> 所有角色 </h1>

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

    @foreach ($players as $player)
        <tr>
            <td>{{ $player -> id}}</td>
            <td>{{ $player -> name}}</td>
            <td>{{ $player -> profession}}</td>

            <td>
                @php
                    $world = \App\Models\World::find($player->world);
                @endphp
    
                {{ $world->region }}
            </td>

            <td>{{ $player -> usage_rate}}</td>
            <td>{{ $player -> winning_rate}}</td>
            <td>{{ $player -> ban_rate}}</td>
            <td>{{ $player -> skin_of_shapes}}</td>
            <td>{{ $player -> listing_date}}</td>
            <td><a href="{{ route('players.show', ['id' => $player -> id]) }}">顯示</a></td>
            <td><a href="{{ route('players.edit', ['id' => $player -> id]) }}">修改</a></td>    
            <td>
                <form action="{{ url('/players/delete', ['id' => $player->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection
