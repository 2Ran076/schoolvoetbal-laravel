@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome, {{ Auth::user()->name }}!</h1>
    <p class="lead">You are logged in.</p>
    <hr class="my-4">
    <p>
        <a class="btn btn-primary btn-lg" href="{{ route('teams.index') }}" role="button">Manage Teams</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('games.index') }}" role="button">Manage Games</a>
    </p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection
