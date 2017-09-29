<?php
require_once "data.inc.php";

// Draw Table
$cols = 5;
$rows = 5;
$color = 'yellow';

function drowTable($cols, $rows, $color) {
    echo "<table border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if (1 == $tr || 1 == $td) {
                echo "<th style='background: $color'>" . $tr * $td . "</th>";
            } else {

                echo "<td>" . $tr * $td . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

//_____________________________________________________________
//Left menu

function drawMenu($menu, $vertical = true) {
    if ( !is_array($menu) ) {
        return false;
    }
    $style = "";
    if (!$vertical) {
        $style = " style='display: inline; margin-right:15px'";
    }
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href='{$item['href']}'> {$item['link']} </a>";
        echo "</li>";
    }
    echo "</ul>";
    return true;
}

//_____________________________________________________________
// Время и дата
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%m');
// %B масяц $mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime('%Y');


//ERROR HANDLING

function my_error_handler($errorNumber, $errorMsg, $errorFile, $errorLine) {
    $dt = time("d-m-Y H:i:s");
    $str = "[$dt] $errorMsg in $errorFile:$errorLine";
    switch ($errorNumber){
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $errorMsg;
    }
    error_log("$str", 3, "error.log");
}