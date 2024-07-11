<?php
include "env.php";
include "helper/view.php";

$url = isset($_GET['url']) ? $_GET['url'] : "/";

switch($url){
    case '/':
        echo(1);
        renderView('view/user/home.php');
        break;
    case 'product':
        echo('product');
}
?>