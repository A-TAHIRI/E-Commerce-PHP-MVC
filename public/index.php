<?php

use App\Controller\ArticlesController;
use App\Controller\PostsController;
use App\Controller\UsersContrller;
use App\Controller\UsersController;

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'posts.index';
}




$page =explode('.',$page);
$action =$page[1];
if( $page[0]=='admin'){
   $controller='App\Controller\Admin\\'.ucfirst($page[1]).'Controller';
    $action=$page[2];
}else{
    $controller='App\Controller\\'.ucfirst($page[0]).'Controller';
}

$controller=new $controller();
$controller->$action();
