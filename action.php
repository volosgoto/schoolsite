<?php

include_once 'db.php';

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$msg = $_POST['textarea'] ?? null;
$submit = $_POST['submit'] ?? null;
$delete = $_POST['delete'] ?? null;



 //Выборка даннданных

$sql = "SELECT name, email, msg, date FROM msgs WHERE 1";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo 'Автор: ' . $row['name'] . '<br>';
    echo 'Дата: ' . $row['date'] . '<br>';
    echo 'Email: ' . $row['email'] . '<br>';
    echo 'Сообщение: ' . $row['msg'] . '<br>';
    echo '<hr>';
}



// Вставка данных в БД
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty($submit)) {
   $sql = "INSERT INTO msgs(name, email, msg) VALUES(?, ?, ?)";
   $stmt = mysqli_prepare($link, $sql);
   mysqli_stmt_bind_param($stmt, "sss", $name, $email, $msg);

   if ( !mysqli_stmt_execute($stmt)) {
       mysqli_error($link);
   } else {
       echo 'Сообщение от автора ' . $name . ' отправлено!';
   }

    if( isset($_POST['url']) ) {
       $url = "http://" . $_POST['url'];
       header("location:$url");
   }

}





