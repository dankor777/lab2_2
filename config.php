<?php
define('_SERVER_NAME', 'localhost:84');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/zad22/php_01_widok_kontroler');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

function out($param){
    if (isset($param)){
        echo $param;
    }
}

?>