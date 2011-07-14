<?php
require_once('./program/lib/bootstrap.php');

if($_SERVER['QUERY_STRING'] == "" || $_SERVER['QUERY_STRING'] == "/") {
header('Location:?/home');
}

if(file_exists('./program/pages'.$_SERVER['QUERY_STRING'].'.php')) {
include('./program/pages'.$_SERVER['QUERY_STRING'].'.php');
} else {
include('./program/pages/404.php');
}

?>