@extends('app')

@section('title', '英雄聯盟網站 - 列出所有角色')

@section('lol_contents')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
        <a href="{{ route('players.create') }} ">新增角色</a>
    @endcan

    <form action="{{ url('players/profession') }}" method='GET'>
        {!! Form::label('pro', '選取職業：') !!}
        {!! Form::select('pro', $professions, $selectedProfession, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>

</div>

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

        @can('admin')
            <th>修改角色資料</th>
            <th>刪除角色資料</th>
        @elsecan('manager')
            <th>修改角色資料</th>
        @endcan
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
            <td><a href="{{ route('players.show', ['id' => $player -> id]) }}">顯示</a></td>
            
            @can('admin')

                <td><a href="{{ route('players.edit', ['id' => $player -> id]) }}">修改</a></td>    
                <td>
                    <form action="{{ url('/players/delete', ['id' => $player->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>

            @elsecan('manager')
                <td><a href="{{ route('players.edit', ['id' => $player -> id]) }}">修改</a></td>
                @endcan
        </tr>
    @endforeach

</table>
{{ $players->withQueryString()->links() }}
@endsection
