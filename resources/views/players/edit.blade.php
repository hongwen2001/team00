<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一球員的編輯表單</title>
</head>
<body>
<h1>顯示單一球員的編輯表單</h1>
<form method="post" action="/players/{{ $player->id}}">
    @csrf
    @method('put')
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $player->id }}</td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" value="{{ $player->name }}"/></td>
        </tr>
        <tr>
            <td>球隊編號</td>
            <td><input type="text" name="tid" value="{{ $player->tid }}"/></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type="text" name="birthdate" value="{{ $player->birthdate }}"/></td>
        </tr>
        <tr>
            <td>到職日</td>
            <td><input type="text" name="onboarddate" value="{{ $player->onboarddate }}"/></td>
        </tr>
        <tr>
            <td>位置</td>
            <td><input type="text" name="position" value="{{ $player->position }}"/></td>
        </tr>
        <tr>
            <td>身高</td>
            <td><input type="text" name="height" value="{{ $player->height }}"/></td>
        </tr>
        <tr>
            <td>體重</td>
            <td><input type="text" name="weight" value="{{ $player->weight }}"/></td>
        </tr>
        <tr>
            <td>年資</td>
            <td><input type="text" name="year" value="{{ $player->year }}"/></td>

        </tr>
        <tr>
            <td>國籍</td>
            <td><input type="text" name="nationality" value="{{ $player->nationality }}"/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
