<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一球隊的編輯表單</title>
</head>
<body>
<h1>顯示單一球隊的編輯表單</h1>
<form method="post" action="/teams/{{ $team->id }}">
    @csrf <!-- CSRF = Cross-Site Request Forgery-->
        @method("put")
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $team->id }}</td>
        </tr>
        <tr>
            <td>名稱</td>
            <td><input type="text" value="{{ $team->name }}"/></td>
        </tr>
        <tr>
            <td>所屬分區</td>
            <td><input type="text" value="{{ $team->zone }}"/></td>
        </tr>
        <tr>
            <td>所在城市</td>
            <td><input type="text" value="{{ $team->city }}"/></td>
        </tr>
        <tr>
            <td>主場</td>
            <td><input type="text" value="{{ $team->home    }}"/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>

</form>
</body>
</html>
