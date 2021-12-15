<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示球員的新增表單</title>
</head>
<body>
<h1>顯示球員的新增表單</h1>
<form method="post" action="/players">
    @csrf
    <table border="1">
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>球隊編號</td>
            <td><input type="text" name="tid"/></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type="text" name="birthdate"/></td>
        </tr>
        <tr>
            <td>到職日</td>
            <td><input type="text" name="onboarddate"/></td>
        </tr>
        <tr>
            <td>位置</td>
            <td><input type="text" name="position"/></td>
        </tr>
        <tr>
            <td>身高</td>
            <td><input type="text" name="height"/></td>
        </tr>
        <tr>
            <td>體重</td>
            <td><input type="text" name="weight"/></td>
        </tr>
        <tr>
            <td>年資</td>
            <td><input type="text" name="year"/></td>

        </tr>
        <tr>
            <td>國籍</td>
            <td><input type="text" name="nationality"/></td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
