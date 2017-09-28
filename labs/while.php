<?php

$str = 'Hello';
$len = strlen($str);
$i = 0;

while ($i < $len) {
    echo $str{$i} . "\n";
    //echo $str[$i] . "\n";
    $i++;

}