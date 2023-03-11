<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];
require(ROOT . DS. 'login.php');