@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Teams</h1>
        <a href="{{ route('teams.create') }}" class="btn btn-primary">Create Team</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Points</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->points }}</td>
                        <td>
                            <a href="{{ route('teams.show', $team->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline-block;">
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
