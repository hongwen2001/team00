<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams = Team::all();
        return view('teams.index')->with(['teams'=>$teams]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Team Model 管理 teams 資料表格
        $team = Team::findOrFail($id);
        return view('teams.show')->with(['team'=>$team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Team Model 管理 teams 資料表格
        $team = Team::findOrFail($id);
        return view('teams.edit')->with(['team'=>$team]);
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
        $team = Team::findOrFail($id);
        // 修改(資料來自於表單)
        $team->name = $request->input('name');
        $team->zone = $request->input('zone');
        $team->city = $request->input('city');
        $team->home = $request->input('home');

        // 正是儲存至 DBMS (Database Management System = MySQL)
        $team->save();

        return redirect('teams'); // 觸發 /teams 路由(用 get 方法)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
