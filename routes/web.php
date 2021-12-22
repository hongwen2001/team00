<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('players');
});

// 資深球員查詢
Route::get('players/senior', [PlayersController::class, 'senior'])->name('players.senior');
// 東區球隊查詢
Route::get('teams/western', [TeamsController::class, 'western'])->name('teams.western');
// 西區球隊查詢
Route::get('teams/eastern', [TeamsController::class, 'eastern'])->name('teams.eastern');

Route::resource("players", PlayersController::class);
Route::resource("teams", TeamsController::class);
