<?php

use App\Controller\ArticlesController;

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}






if ($page === 'home') {
    $controller = new ArticlesController();
    $controller->index();
} elseif ($page === 'posts.article') {
    $controller = new ArticlesController();
    $controller->article();
} elseif ($page === 'posts.categorie') {
    $controller = new ArticlesController();
    $controller->categorie();
} elseif ($page === 'login') {
    $controller = new \App\Controller\UsersController();
    $controller->login();
} elseif ($page === '404') {
    require  ROOT . '/pages/posts/not_found.php';
} elseif ($page === 'admin.posts.index') {
    $controller = new \App\Controller\Admin\ArticlesController;
    $controller->index();
}
