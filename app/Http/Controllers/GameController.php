<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $games = Game::all();

    return view('admin.index', compact('games'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|decimal|min:0|max:9999.99',
        'release_date' => 'required|date',
        'thumb' => 'nullable|string'
    ]);

    Game::create($request->all());

    return redirect()->route('games.index')->with('success', 'Game added successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $game = Game::findOrFail($id);

    return view('admin.show', compact('game'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $game = Game::findOrFail($id);

    return view('admin.edit', compact('game'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|decimal|min:0|max:9999.99',
        'release_date' => 'required|date',
        'thumb' => 'nullable|string'
    ]);

    // Recupera il gioco e aggiorna i dati
    $game = Game::findOrFail($id);
    $game->update($request->all());

    // Redirect con messaggio di successo
    return redirect()->route('games.index')->with('success', 'Game updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
}