<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all()->sortByDesc('tid');
        return view('players.index')->with(['players'=>$players]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = Team::all()->sortBy('id');
        return view('players.create')->with(['teams'=>$teams]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $tid = $request->input('tid');
        $position = $request->input('position');
        $birthdate = $request->input('birthdate');
        $onboarddate = $request->input('onboarddate');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $year = $request->input('year');
        $nationality = $request->input('nationality');

        Player::create(
            [
                'name' => $name,
                'tid' => $tid,
                'position' => $position,
                'birthdate' => $birthdate,
                'onboarddate' => $onboarddate,
                'height' => $height,
                'weight' => $weight,
                'year' => $year,
                'nationality' => $nationality
            ]
        );
        return redirect('players'); // 觸發 /players 路由(用 get 方法)

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Player Model 管理 players 資料表格
        $player = Player::findOrFail($id);
        return view('players.show')->with(['player'=>$player]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Player Model 管理 players 資料表格
        $player = Player::findOrFail($id);
        $teams = Team::all()->sortBy('id');
        return view('players.edit')->with(['player'=>$player, 'teams'=>$teams]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 先調出 $id 的 Player Model物件
        $player = Player::findOrFail($id);
        // 修改(資料來自於表單)
        $player->name = $request->input('name');
        $player->tid = $request->input('tid');
        $player->position = $request->input('position');
        $player->birthdate = $request->input('birthdate');
        $player->onboarddate = $request->input('onboarddate');
        $player->height = $request->input('height');
        $player->weight = $request->input('weight');
        $player->year = $request->input('year');
        $player->nationality = $request->input('nationality');
        // 正是儲存至 DBMS (Database Management System = MySQL)
        $player->save();

        return redirect('players'); // 觸發 /players 路由(用 get 方法)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect('players'); // 觸發 /players 路由(用 get 方法)
    }


    public function senior()
    {
        $players = Player::senior()->get();
        return view('players.index', ['players' => $players]);
    }
}
