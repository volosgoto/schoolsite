<?php

$row = 5;
$col = 5;

for($i = 1; $i <= $row; $i++ ) {
    echo $i;
        for($j = 1; $j<=$col; $j++){
            echo $i * $j;
        }
    echo "\n";
}


echo "";


echo '<table border="1">';
for($tr = 1; $tr <= $row; $tr++){
    echo '<tr>';
    for($td = 1; $td<=$col; $td++){
        echo '<td>' . $tr * $td . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo 2 + NULL;