<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список Игр</title>
</head>
<body>
<h1>Наш каталог игр</h1>

<ul>
    @foreach ($games as $game)
        <li>Название: {{ $game['title'] }} | Жанр: {{ $game['genre'] }}</li>
    @endforeach
</ul>

</body>
</html>

