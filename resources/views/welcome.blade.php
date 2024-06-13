<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schoolvoetbal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Welkom bij Schoolvoetbal</h1>
        <p class="lead">Manage your teams and games easily.</p>
        <a href="{{ route('teams.index') }}" class="btn btn-primary">View Teams</a>
        <a href="{{ route('games.index') }}" class="btn btn-secondary">View Games</a>
    </div>
</body>
</html>
