@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Game</h2>
    <form method="POST" action="{{ route('games.store') }}">
        @csrf
        <div class="mb-3">
            <label for="team1_id" class="form-label">Team 1:</label>
            <select id="team1_id" name="team1_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
            @error('team1_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="team2_id" class="form-label">Team 2:</label>
            <select id="team2_id" name="team2_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
            @error('team2_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field" class="form-label">Field:</label>
            <input type="text" class="form-control" id="field" name="field" required>
            @error('field')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Time:</label>
            <input type="datetime-local" class="form-control" id="time" name="time" required>
            @error('time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Game</button>
    </form>
</div>
@endsection
