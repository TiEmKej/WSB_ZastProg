<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj książkę</title>
</head>
<body>
    <h1>Dodaj książkę</h1>

    <form action="/books" method="POST">
        @csrf

        <label for="title">Tytuł książki</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">

        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <button type="submit">Zapisz książkę</button>
    </form>
</body>
</html>