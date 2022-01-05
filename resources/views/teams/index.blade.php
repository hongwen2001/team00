@extends('app')

@section('title', 'NBA 球隊')

@section('nba_theme', 'NBA 球隊')

@section('nba_contents')
    <h1>顯示所有球隊資料 </h1>
    <a href="{{ route('teams.create') }}">新增球隊</a>
    <a href="{{ route('teams.western') }}">西區球隊</a>
    <a href="{{ route('teams.eastern') }}">東區球隊</a>
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
                <td><a href="{{ route('teams.show', ['team' => $team->id]) }}">顯示</a></td>
                <td><a href="{{ route('teams.edit', ['team' => $team->id]) }}">修改</a></td>
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
@endsection
