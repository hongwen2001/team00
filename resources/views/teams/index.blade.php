<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有球隊資料</title>
</head>
<body>
<h1>顯示所有球隊資料 </h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>操作</th>
    </tr>
    @foreach($teams as $team)
        <tr>
            <td>{{ $team->id }}</td>
            <td>{{ $team->name }}</td>
            <td>
                <a href="teams/{{ $team->id }}">
                    詳細
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
