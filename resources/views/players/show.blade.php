<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一球員的詳細資料</title>
</head>
<body>
<h1>顯示單一球員的詳細資料 </h1>
<a href="{{ route('players.index') }}">所有球員</a>
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{ $player->id }}</td>
    </tr>
    <tr>
        <td>姓名</td>
        <td>{{ $player->name }}</td>
    </tr>
    <tr>
        <td>球隊</td>
        <td>{{ $player->team->name }}</td>
    </tr>
    <tr>
        <td>生日</td>
        <td>{{ $player->birthdate }}</td>
    </tr>
    <tr>
        <td>到職日</td>
        <td>{{ $player->onboarddate }}</td>
    </tr>
    <tr>
        <td>位置</td>
        <td>{{ $player->position }}</td>
    </tr>
    <tr>
        <td>身高</td>
        <td>{{ $player->height }}</td>
    </tr>
    <tr>
        <td>體重</td>
        <td>{{ $player->weight }}</td>
    </tr>
    <tr>
        <td>年資</td>
        <td>{{ $player->year }}</td>

    </tr>
    <tr>
        <td>國籍</td>
        <td>{{ $player->nationality }}</td>
    </tr>
</table>
</body>
</html>
