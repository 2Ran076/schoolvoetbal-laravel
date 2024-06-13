@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Team</h1>
        <form action="{{ route('teams.update', $team->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $team->name }}" required>
            </div>
            <div class="form-group">
                <label for="points">Points</label>
                <input type="number" name="points" class="form-control" id="points" value="{{ $team->points }}" required>
            </div>
            <div class="form-group">
                <label for="creator_id">Creator ID</label>
                <input type="number" name="creator_id" class="form-control" id="creator_id" value="{{ $team->creator_id }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
