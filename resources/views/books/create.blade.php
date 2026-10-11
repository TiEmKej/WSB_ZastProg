<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj książkę</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/">Strona główna</a>
        <a href="/books">Lista książek</a>
        <a href="/books/create">Dodaj książkę</a>
    </nav>
    
    <h1>Dodaj książkę</h1>

    <form action="/books" method="POST">
        @csrf

        <p>
            <label for="title">Tytuł książki</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="year">Rok wydania</label><br>
            <input type="number" id="year" name="year" value="{{ old('year') }}">
            @error('year')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="category">Kategoria</label><br>
            <select id="category" name="category">
                @foreach (['Literatura piękna', 'Sci-Fi / Fantasy', 'Biografie', 'Naukowe'] as $option)
                    <option value="{{ $option }}" @selected(old('category') === $option)>
                        {{ $option }}
                    </option>
                @endforeach
            </select>
            @error('category')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="description">Opis książki</label><br>
            <textarea id="description" name="description" rows="5" cols="40">{{ old('description') }}</textarea>
            @error('description')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>
                <input type="checkbox" name="is_available" value="1" @checked(old('is_available'))>
                Dostępna w bibliotece
            </label>
        </p>

        <button type="submit">Zapisz książkę</button>
    </form>
</body>
</html>