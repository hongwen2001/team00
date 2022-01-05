@extends('app')

@section('title', '新增一筆球員資料')

@section('nba_contents')
    <h1>新增球員</h1>
    <form method="post" action="/players">
        @csrf
        <table border="1">
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name" maxlength="10" size="10" required/></td>
            </tr>
            <tr>
                <td>球隊編號</td>
                <td>
                    <select name="tid" required>
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </td>
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
                        @foreach($positions as $position)
                            <option value="{{$position->position}}">{{$position->position}}</option>
                        @endforeach
                    </select>
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
                        <option value="法國">法國</option>
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

@endsection
