@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Team</h1>
        <form action="{{ route('teams.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="points">Points</label>
                <input type="number" name="points" class="form-control" id="points" required>
            </div>
            <div class="form-group">
                <label for="creator_id">Creator ID</label>
                <input type="number" name="creator_id" class="form-control" id="creator_id" required>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection