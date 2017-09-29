<?php
//error_reporting(0);
require_once "inc/lib.inc.php";
//set_error_handler('my_error_handler');

$title = 'Главная страница';
$wellcome = 'Добро пожадовать';
$header = $wellcome . ', Гость!';

$id = $_GET['id'] ?? '';

if ( !empty($id) ) {
$id = strtolower( trim(strip_tags($_GET['id'])));
    switch ($id){
        case ('about'):
            $title = 'О нас';
            $wellcome = 'О нашем сате';
                break;
        case ('contact'):
            $title = 'Контакты';
            $wellcome = 'Обратная связь';
            break;

        case ('table'):
            $title = 'Таблица умножения';
            $wellcome = 'Таблица умножения';
            break;
        case ('calc'):
            $title = 'Калькулятор';
            $wellcome = 'Калькулятор';
            break;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title?></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<div id="header">
    <!-- Верхняя часть страницы -->
    <?php
    require_once "inc/top.inc.php";
    ?>
    <!-- Верхняя часть страницы -->
</div>

<div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header?></h1>
    <!-- Заголовок -->

    <blockquote>
        <?php echo 'Сегодня: ' . $day . '-' . $mon . '-' . $year; ?>
    </blockquote>

    <!-- Область основного контента -->
    <?php
    require_once "inc/index.inc.php";
    switch ($id) {
        case ('about'):
            require_once 'about.php';
            break;
        case ('contact'):
            require_once  'contact.php';
            break;

        case ('table'):
            require_once  'table.php';
            break;
        case ('calc'):
            require_once 'calc.php';
            $header = 'Калькулятор';
            break;
    }
    ?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php
    require_once "inc/menu.inc.php";
    ?>
    <!-- Меню -->
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
    require_once "inc/bottom.inc.php";
    ?>
    <!-- Нижняя часть страницы -->
</div>
</body>

</html>