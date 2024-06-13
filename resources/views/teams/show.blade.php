@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Team Details</h1>
        <p><strong>ID:</strong> {{ $team->id }}</p>
        <p><strong>Name:</strong> {{ $team->name }}</p>
        <p><strong>Points:</strong> {{ $team->points }}</p>
        <a href="{{ route('teams.index') }}" class="btn btn-primary">Back to Teams</a>
    </div>
@endsection
