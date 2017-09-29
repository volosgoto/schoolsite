<?php
require_once "inc/lib.inc.php";
drawMenu($leftMenu, false);
?>

<hr>
<p> &copy; Супер Мега Веб-мастер, <?php echo $year; ?>  </p>
<p>
    Powered by <?php
                    //echo $_SERVER['SERVER_SOFTWARE'];
                    echo 'PHP' . '&ndash;' . PHP_VERSION . ' on ' . PHP_OS;
                ?>
</p>
