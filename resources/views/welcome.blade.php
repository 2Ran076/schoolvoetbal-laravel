<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Schoolvoetbal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">Schoolvoetbal</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @if (Auth::check())
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('teams.index') }}">Manage Teams</a></li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="form-inline">
                                @csrf
                                <button class="btn btn-link nav-link" type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Schoolvoetbal!</h1>
            <p class="lead">Join us and manage your teams easily.</p>
            <hr class="my-4">
            @if (!Auth::check())
                <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Register</a>
                <a class="btn btn-secondary btn-lg" href="{{ route('login') }}" role="button">Login</a>
            @else
                <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Go to Dashboard</a>
            @endif
        </div>
    </main>

    <footer class="text-center mt-4">
        <p>&copy; 2024 Schoolvoetbal</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
