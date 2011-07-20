<?php
require_once('./program/lib/bootstrap.php');

if($_SERVER['QUERY_STRING'] == "" || $_SERVER['QUERY_STRING'] == "/") {
header('Location:?/home');
}

$location = explode('/',$_SERVER['QUERY_STRING']);


if(file_exists('./program/pages/'.$location[1].'.php')) {
include('./program/pages/'.$location[1].'.php');
} else {
include('./program/pages/404.php');
}

?>