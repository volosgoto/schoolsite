<?php

$check = isset($_POST["resultButton"]) &&
    isset($_POST["operator"]) &&
    is_numeric($_POST["number1"]) &&
    is_numeric($_POST["number2"]);

if ($check) {
    $result = calculation(
        $_POST["number1"],
        $_POST["number2"],
        $_POST["operator"]
    );
} else {
    $result = 'Один из операндов не верный';
}

if (empty($_POST["number1"]) || empty($_POST["number1"])) {
    $result = 0;
}

function calculation($a, $b, $operator) {
    switch ($operator) {
        case 'plus':
            return $a + $b;
            break;
        case 'minus':
            return $a - $b;
            break;
        case 'mult':
            return $a * $b;
            break;
        case 'division':
            return (0 != $b) ? $a / $b : $b;
            break;
    }
}


?>

<!-- Область основного контента -->
<form action="" method="POST">
    <p>Value 1</p>
    <input type="text" name="number1" value="">
    <p>Value 2</p>
    <input type="text" name="number2" value="">
    <p>
        <input type="radio" name="operator" value="plus"> +
        <input type="radio" name="operator" value="minus"> -
        <input type="radio" name="operator" value="mult"> *
        <input type="radio" name="operator" value="division"> /
    </p>
    <p>Result</p>
    <input type="text" name="resulIndicator" value=" <?php echo $result; ?> " size="30">

    <p>
        <input type="reset" name="resetButton" value="Очистить">
        <input type="submit" name="resultButton" value="Результат">
    </p>
</form>
<!-- Область основного контента -->
