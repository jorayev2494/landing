<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Здраствуйте {{ env("ADMIN_EMAIL") }}</h3>
    <h4>Отправитель: {{ $data["name"] }}</h4>
    <h5>Номерь Отправителья: {{ $data["phone"] }}</h5>
    <p>Тело сообщении: {{ $data["message"] }}</p>
</body>
</html>