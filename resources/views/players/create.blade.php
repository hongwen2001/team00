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
            <td><input type="text" name="name" maxlength="10" size="10" required/></td>
        </tr>
        <tr>
            <td>球隊編號</td>
            <td><input type="text" name="tid"/></td>
        </tr>
        <tr>
            <td>生日</td>
            <td>
                <input type="date" name="birthdate" min="1958-01-01" required/>
            </td>
        </tr>
        <tr>
            <td>到職日</td>
            <td>
                <input type="date" name="onboarddate" min="1988-12-31" required/>
            </td>
        </tr>
        <tr>
            <td>位置</td>
            <td>
                <select name="position" required>
                    <option value="控球後衛">控球後衛</option>
                    <option value="得分後衛">得分後衛</option>
                    <option value="後衛" selected>後衛</option>
                    <option value="前鋒">前鋒</option>
                    <option value="小前鋒">小前鋒</option>
                    <option value="大前鋒">大前鋒</option>
                    <option value="中鋒">中鋒</option>
                </select>
                <!--
                <input type="radio" name="position" value="控球後衛"/>
                <label for="html">控球後衛</label><br/>
                <input type="radio" name="position" value="得分後衛"/>
                <label for="html">分後衛</label><br/>
                <input type="radio" name="position" value="後衛"/>
                <label for="html">後衛</label><br/>
                <input type="radio" name="position" value="前鋒"/>
                <label for="html">前鋒</label><br/>
                <input type="radio" name="position" value="小前鋒"/>
                <label for="html">小前鋒</label><br/>
                <input type="radio" name="position" value="大前鋒"/>
                <label for="html">大前鋒</label><br/>
                <input type="radio" name="position" value="中鋒"/>
                <label for="html">中鋒</label>
                -->
            </td>
        </tr>
        <tr>
            <td>身高</td>
            <td>
                <input type="number" name="height" value="170" min="150" max="300"/>
            </td>
        </tr>
        <tr>
            <td>體重</td>
            <td>
                <input type="number" name="weight" value="80" min="70" max="300"/>
            </td>
        </tr>
        <tr>
            <td>年資</td>
            <td><input type="number" name="year" value="1" min="0" max="30"/></td>

        </tr>
        <tr>
            <td>國籍</td>
            <td>
                <select name="nationality" required>
                    <option value="美國" selected>美國</option>
                    <option value="土耳其">土耳其</option>
                    <option value="法國" >法國</option>
                    <option value="印度">印度</option>
                    <option value="非洲">非洲</option>
                    <option value="中國">中國</option>
                    <option value="塞爾維亞">塞爾維亞</option>
                    <option value="英國">英國</option>
                    <option value="台灣">台灣</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
