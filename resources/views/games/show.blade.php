@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Game Details</h1>
        <p><strong>ID:</strong> {{ $game->id }}</p>
        <p><strong>Team 1:</strong> {{ $game->team1->name }}</p>
        <p><strong>Team 2:</strong> {{ $game->team2->name }}</p>
        <p><strong>Field:</strong> {{ $game->field }}</p>
        <p><strong>Time:</strong> {{ $game->time }}</p>
        <a href="{{ route('games.index') }}" class="btn btn-primary">Back to Games</a>
    </div>
@endsection
