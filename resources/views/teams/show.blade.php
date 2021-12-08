<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一球隊的詳細資料</title>
</head>
<body>
<h1>顯示單一球隊的詳細資料 </h1>
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{ $team->id }}</td>
    </tr>
    <tr>
        <td>名稱</td>
        <td>{{ $team->name }}</td>
    </tr>
    <tr>
        <td>所屬分區</td>
        <td>{{ $team->zone }}</td>
    </tr>
    <tr>
        <td>所在城市</td>
        <td>{{ $team->city }}</td>
    </tr>
    <tr>
        <td>主場</td>
        <td>{{ $team->home    }}</td>
    </tr>
</table>
</body>
</html>
