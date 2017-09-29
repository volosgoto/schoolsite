<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = abs ((int)$_POST['rows']);
    $cols = abs ((int)$_POST['cols']);
    $color = $_POST['color'];
} else {
    $rows = 10;
    $cols = 10;
    $color = 'yellow';
}

?>
    <!-- Область основного контента -->
    <form action='<?php $_SERVER['REQUEST_URI']?>' method='POST'>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?php echo $_POST['cols'] ?? $cols; ?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?php echo $_POST['rows'] ?? $rows; ?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?php echo $_POST['color'] ?? $color; ?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <table border='1' width="200">
        <?php
        include_once "inc/lib.inc.php";
        drowTable($cols, $rows, $color);
        ?>
    </table>
    <!-- Таблица -->
    <!-- Область основного контента -->
