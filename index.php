<?php
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>
<body>
<p>Список записей в гостевой книге</p>

<?php
require_once 'action.php';
?>


<p>Добавить записть</p>
<form action="action.php" method="post">

    <input name="url" type="hidden" value=<?php echo $url; ?> />

    <p>Введите имя</p>
    <p><input type="text" name="name" value=""></p>
    <p>Введите email</p>
    <p><input type="text" name="email" value=""></p>
    <p>Введите текст</p>
    <p><textarea rows="10" cols="45" name="textarea"></textarea></p>
    <p><input type="submit" name="submit" value="Отправить!"> </p>
    <p><input type="submit" name="delete" value="Удалить!"></p>
</form>
</body>
</html>