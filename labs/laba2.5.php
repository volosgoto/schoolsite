<?php

$size = ini_get('post_max_size');
$letter = $size[strlen($size) - 1];
$size = (int)$size;


switch ( $letter ) {
    case 'G': $size *= 1024;
    case 'M': $size *= 1024;
    case 'K': $size *= 1024;
}
echo $size . $letter;