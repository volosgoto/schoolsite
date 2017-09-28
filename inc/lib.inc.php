<?php

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
}
//_____________________________________________________________