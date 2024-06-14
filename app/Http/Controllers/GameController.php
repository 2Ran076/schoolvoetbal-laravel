<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with(['team1', 'team2'])->get(); 
        return view('games.index', compact('games'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('games.create', compact('teams'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'field' => 'required|string|max:255',
            'time' => 'required|date_format:Y-m-d\TH:i', 
        ]);

        Game::create([
            'team1_id' => $request->team1_id,
            'team2_id' => $request->team2_id,
            'team1_score' => null,
            'team2_score' => null,
            'field' => $request->field,
            'referee_id' => Auth::id(),
            'time' => $request->time,
        ]);

        return redirect()->route('games.index')->with('success', 'Game created successfully.');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        $teams = Team::all();
        return view('games.edit', compact('game', 'teams'));
    }

    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('games.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
