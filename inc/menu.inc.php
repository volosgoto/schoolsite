<?php
require_once "data.inc.php";
require_once "lib.inc.php";


if ( !drawMenu($leftMenu)) {
    //trigger_error(ERR_ON_LEFT_MENU, E_USER_ERROR);
    echo ERR_ON_LEFT_MENU;
}