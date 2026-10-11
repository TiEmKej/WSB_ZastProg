<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pojemność bryły</title>
    <style>
        body {
            background-color: yellow;
        }
        p {
            color: blue;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <p>
        Prostopadłościan o wymiarach {{ $wysokosc }} × {{ $szerokosc }} × {{ $glebokosc }}
        ma pojemność {{ $pojemnosc }} m<sup>3</sup>.
    </p>
</body>
</html>