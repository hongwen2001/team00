<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示球隊的新增表單</title>
</head>
<body>
<h1>顯示球隊的新增表單</h1>
<form method="post" action="/teams">
    @csrf <!-- CSRF = Cross-Site Request Forgery-->
    <table border="1">
        <tr>
            <td>名稱</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>所屬分區</td>
            <td><input type="text" name="zone"/></td>
        </tr>
        <tr>
            <td>所在城市</td>
            <td><input type="text" name="city"/></td>
        </tr>
        <tr>
            <td>主場</td>
            <td><input type="text" name="home"/></td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>

</form>
</body>
</html>
