<html>

    <head>
        <title>列出所有角色</title>
    </head>

    <body>
        <h1>列出所有角色</h1>

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
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>

            @for($i=0; $i<count($players); $i++)
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
                </tr>
            @endfor

        </table>
    </body>
</html>