<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有球員資料</title>
</head>
<body>
<h1>顯示所有球員資料 </h1>
<a href="{{ route('teams.index') }}">所有球隊</a><br/>
<a href="{{ route('players.create') }}">新增球員</a>
<a href="{{ route('players.index') }}">所有球員</a>
<a href="{{ route('players.senior') }}">資深球員</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>年資</th>
        <th>分區</th>
        <th>球隊</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->year }}</td>
            <td>{{ $player->team->zone }}</td>
            <td>{{ $player->team->name }}</td>
            <td><a href="{{ route('players.show', ['player'=>$player->id]) }}">顯示</a></td>
            <td><a href="{{ route('players.edit', ['player'=>$player->id]) }}">修改</a></td>
            <td>
                <form method="post" action="players/{{ $player->id }}">
                    @csrf <!-- CSRF = Cross-Site Request Forgery-->
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
