<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>PHP веб сайт</title>
</head>
<body>

<?php require "blocks/header.php" ?>

<form action="check.php" method="post">
    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button><br>
    </div>
</form>

<?php require "blocks/footer.php" ?>

</div>

</body>
</html>