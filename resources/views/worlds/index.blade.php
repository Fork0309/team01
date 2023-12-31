@extends('app')

@section('title', '英雄聯盟網站 - 列出所有區域')

@section('lol_contents')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
        <a href="{{ route('worlds.create') }} ">新增區域</a>
    @endcan

    <form action="{{ url('worlds/technology') }}" method='GET'>
        {!! Form::label('tec', '選取科技水平：') !!}
        {!! Form::select('tec', $technologys, $selectedTechnology, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>

</div>

<table>

    <tr>
        <th>區域編號</th>
        <th>區域</th>
        <th>統治</th>
        <th>對於魔法的態度</th>
        <th>科技水平</th>
        <th>整體環境</th>
        <th>顯示該區域資料</th>

        @can('admin')
            <th>修改該區域資料</th>
            <th>刪除該區域資料</th>
        @elsecan('manager')
            <th>修改該區域資料</th>
        @endcan

    </tr>

    @foreach ($worlds as $world)
        <tr>
            <td>{{ $world -> id }}</td>
            <td>{{ $world -> region }}</td>
            <td>{{ $world -> rule }}</td>
            <td>{{ $world -> attitude }}</td>
            <td>{{ $world -> technology }}</td>
            <td>{{ $world -> environment }}</td>
            <td><a href="{{ route('worlds.show', ['id' => $world -> id]) }}">顯示</a></td>
            
            @can('admin')
                <td><a href="{{ route('worlds.edit', ['id' => $world -> id]) }}">修改</a></td>    
                <td>
                    <form action="{{ url('/worlds/delete', ['id' => $world->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            @elsecan('manager')
                <td><a href="{{ route('worlds.edit', ['id' => $world -> id]) }}">修改</a></td>
            @endcan
        </tr>
    @endforeach

<table>

@endsection