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
        <th>生日</th>
        <th>到職日</th>
        <th>位置</th>
        <th>身高</th>
        <th>體重</th>
        <th>年資</th>
        <th>國籍</th>
    </tr>
    @foreach($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->tid }}</td>
            <td>{{ $player->birthdate  }}</td>
            <td>{{ $player->onboarddate }}</td>
            <td>{{ $player->position }}</td>
            <td>{{ $player->height }}</td>
            <td>{{ $player->weight }}</td>
            <td>{{ $player->year }}</td>
            <td>{{ $player->nationality }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
