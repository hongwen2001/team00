<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有球隊資料</title>
</head>
<body>
<h1>顯示所有球隊資料 </h1>
<a href="{{ route('players.index') }}">所有球員</a>
<a href="{{ route('teams.create') }}">新增球隊</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>分區</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($teams as $team)
        <tr>
            <td>{{ $team->id }}</td>
            <td>{{ $team->name }}</td>
            <td>{{ $team->zone }}</td>
            <td>
                <a href="teams/{{ $team->id }}">
                    詳細
                </a>
            </td>
            <td>
                <a href="teams/{{ $team->id }}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="teams/{{ $team->id }}">
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
