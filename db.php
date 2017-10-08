<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'gbphpspecialist';
$link = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($link, "utf8");

$sql = "SELECT name, phone FROM teachers";
$result = mysqli_query($link, $sql);

//
//
//while ($items = mysqli_fetch_assoc($result)) {
//    echo $items['name'];
//}
//
