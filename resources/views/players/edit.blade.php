@extends('app')

@section('title', '編輯特定球員')

@section('nba_theme', '編輯中的球員')

@section('nba_contents')
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
                <td><input type="text" name="name" value="{{ $player->name }}" maxlength="10" size="10" required/></td>
            </tr>
            <tr>
                <td>球隊編號</td>
                <td>
                    <select name="tid" required>
                        @foreach ($teams as $team)
                            @if ($team->id == $player->tid)
                                <option value="{{ $team->id }}" selected>{{ $team->name }}</option>
                            @else
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td>
                    <input type="date" name="birthdate" value="{{ $player->birthdate }}" min="1958-01-01" required/>
                </td>
            </tr>
            <tr>
                <td>到職日</td>
                <td>
                    <input type="date" name="onboarddate" value="{{ $player->onboarddate }}" min="1988-12-31" required/>
                </td>
            </tr>
            <tr>
                <td>位置</td>
                <td>
                    <select name="position" required>
                        @foreach($positions as $position)
                            @if($player->position==$position->position)
                                <option value="{{$position->position}}" selected>{{$position->position}}</option>
                            @else
                                <option value="{{$position->position}}">{{$position->position}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>身高</td>
                <td>
                    <input type="number" name="height" value="{{ $player->height }}" min="150" max="300"/>
                </td>
            </tr>
            <tr>
                <td>體重</td>
                <td>
                    <input type="number" name="weight" value="{{ $player->weight }}" min="70" max="300"/>
                </td>
            </tr>
            <tr>
                <td>年資</td>
                <td>
                    <input type="number" name="year" value="{{ $player->year }}" min="0" max="30"/>
                </td>

            </tr>
            <tr>
                <td>國籍</td>
                <td>
                    <select name="nationality" required>
                        @if ($player->nationality=="美國")
                            <option value="美國" selected>美國</option>
                        @else
                            <option value="美國">美國</option>
                        @endif
                        @if ($player->nationality=="土耳其")
                            <option value="土耳其" selected>土耳其</option>
                        @else
                            <option value="土耳其">土耳其</option>
                        @endif
                        @if ($player->nationality=="法國")
                            <option value="法國" selected>法國</option>
                        @else
                            <option value="法國">法國</option>
                        @endif
                        @if ($player->nationality=="印度")
                            <option value="印度" selected>印度</option>
                        @else
                            <option value="印度">印度</option>
                        @endif
                        @if ($player->nationality=="非洲")
                            <option value="非洲" selected>非洲</option>
                        @else
                            <option value="非洲">非洲</option>
                        @endif
                        @if ($player->nationality=="中國")
                            <option value="中國" selected>中國</option>
                        @else
                            <option value="中國">中國</option>
                        @endif
                        @if ($player->nationality=="塞爾維亞")
                            <option value="塞爾維亞" selected>塞爾維亞</option>
                        @else
                            <option value="塞爾維亞">塞爾維亞</option>
                        @endif
                        @if ($player->nationality=="英國")
                            <option value="英國" selected>英國</option>
                        @else
                            <option value="英國">英國</option>
                        @endif
                        @if ($player->nationality=="台灣")
                            <option value="台灣" selected>台灣</option>
                        @else
                            <option value="台灣">台灣</option>
                        @endif
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>
@endsection
