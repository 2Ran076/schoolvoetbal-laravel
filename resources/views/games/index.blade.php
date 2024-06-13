@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Games</h1>
        <a href="{{ route('games.create') }}" class="btn btn-primary">Create Game</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Team 1</th>
                    <th>Team 2</th>
                    <th>Field</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game->id }}</td>
                        <td>{{ $game->team1->name }}</td>
                        <td>{{ $game->team2->name }}</td>
                        <td>{{ $game->field }}</td>
                        <td>
                            <a href="{{ route('games.show', $game->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
