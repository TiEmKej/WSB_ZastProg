<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista książek</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/">Strona główna</a>
        <a href="/books">Lista książek</a>
        <a href="/books/create">Dodaj książkę</a>
    </nav>
    
    <h1>Lista książek</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif
</body>
</html>