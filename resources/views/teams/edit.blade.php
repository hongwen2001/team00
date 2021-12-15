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
            <td><input type="text" name="name" value="{{ $team->name }}" maxlength="20" size="20" required/></td>
        </tr>
        <tr>
            <td>所屬分區</td>
            <td>
                <select name="zone">
                    @if ($team->zone=="東區")
                        <option value="東區" selected>東區</option>
                    @else
                        <option value="東區">東區</option>
                    @endif
                    @if ($team->zone=="西區")
                        <option value="西區" selected>西區</option>
                    @else
                        <option value="西區">西區</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td>所在城市</td>
            <td><input type="text" name="city" value="{{ $team->city }}" maxlength="20" size="20" required/></td>
        </tr>
        <tr>
            <td>主場</td>
            <td><input type="text" name="home" value="{{ $team->home }}" maxlength="20" size="20" required/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>

</form>
</body>
</html>
