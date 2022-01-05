@extends('app')

@section('title', '顯示單一球隊資料')

@section('nba_contents')
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

    <h1>{{ $team->name }}球隊的所有球員(共{{ count($team->players) }}位)</h1>
    <table border="1">
        <tr>
            <th>編號</th>
            <th>姓名</th>
            <th>生日</th>
            <th>到職日</th>
            <th>位置</th>
            <th>身高</th>
            <th>體重</th>
            <th>年資</th>
            <th>國籍</th>
        </tr>
        @foreach($team->players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->birthdate }}</td>
                <td>{{ $player->onboarddate }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->height }}</td>
                <td>{{ $player->weight }}</td>
                <td>{{ $player->year }}</td>
                <td>{{ $player->nationality }}</td>
            </tr>
        @endforeach
    </table>
@endsection

