<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zdjęcie</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main>
        <p>
            To jest zdjęcie
            @if (is_null($city))
                bez podanego miasta
            @else
                z {{ $city }}
            @endif
            zrobione na ulicy {{ $street }}.
        </p>
    </main>
</body>
</html>