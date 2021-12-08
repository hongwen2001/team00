<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有球員資料</title>
</head>
<body>
<h1>顯示所有球員資料 </h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>球隊編號</th>
        <th>操作</th>
    </tr>
    @foreach($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->tid }}</td>
            <td>
                <a href="players/{{ $player->id }}">
                    詳細
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
