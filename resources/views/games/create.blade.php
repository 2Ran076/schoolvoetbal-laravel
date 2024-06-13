<!-- resources/views/games/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Game</h1>
        <form action="{{ route('games.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="team1_id">Team 1 ID</label>
                <input type="number" name="team1_id" class="form-control" id="team1_id" required>
            </div>
            <div class="form-group">
                <label for="team2_id">Team 2 ID</label>
                <input type="number" name="team2_id" class="form-control" id="team2_id" required>
            </div>
            <div class="form-group">
                <label for="field">Field</label>
                <input type="text" name="field" class="form-control" id="field" required>
            </div>
            <div class="form-group">
                <label for="referee_id">Referee ID</label>
                <input type="number" name="referee_id" class="form-control" id="referee_id" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="datetime-local" name="time" class="form-control" id="time" required>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
