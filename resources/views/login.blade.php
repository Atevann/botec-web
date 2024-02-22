<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="face_menu">Вход в личный кабинет</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="content">
            <label for="email" class="header">Введите Email:</label>
            <br>
            <input type="email" name="email" id="email" required autofocus>
        </div>
        <div class="content">
            <label for="password">Введите пароль:</label>
            <br>
            <input type="password" name="password" id="password" required>
           
        </div>
        <div>
        <br>
            <button type="submit" class="content">Войти</button>
        </div>
    </form>
</body>
</html>
