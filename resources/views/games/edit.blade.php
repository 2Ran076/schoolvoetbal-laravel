@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Game</h1>
        <form action="{{ route('games.update', $game->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="team1_id">Team 1 ID</label>
                <input type="number" name="team1_id" class="form-control" id="team1_id" value="{{ $game->team1_id }}" required>
            </div>
            <div class="form-group">
                <label for="team2_id">Team 2 ID</label>
                <input type="number" name="team2_id" class="form-control" id="team2_id" value="{{ $game->team2_id }}" required>
            </div>
            <div class="form-group">
                <label for="field">Field</label>
                <input type="text" name="field" class="form-control" id="field" value="{{ $game->field }}" required>
            </div>
            <div class="form-group">
                <label for="referee_id">Referee ID</label>
                <input type="number" name="referee_id" class="form-control" id="referee_id" value="{{ $game->referee_id }}" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="datetime-local" name="time" class="form-control" id="time" value="{{ $game->time->format('Y-m-d\TH:i') }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
