<html>

    <head>
        <title>列出所有角色</title>
    </head>

    <body>
        <h1>列出所有角色</h1>

        @for($i=0; $i<count($players); $i++)
        角色名稱: {{$players[$i]['name'] }} <br/>
        職業: {{$players[$i]['profession'] }} <br/>
        所屬區域: {{$players[$i]['world'] }} <br/>
        使用率: {{$players[$i]['usage_rate'] }} <br/>
        勝率: {{$players[$i]['winning_rate'] }} <br/>
        進用率: {{$players[$i]['ban_rate'] }} <br/>
        當前造型數量: {{$players[$i]['skin_of_shapes'] }} <br/>
        上市日期: {{$players[$i]['listing_date'] }} <br/><br/>
        @endfor

    </body>

</html>