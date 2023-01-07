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
    $page = 'home';
}






if ($page === 'home') {
    $controller = new PostsController();
    $controller->index();
} elseif ($page === 'posts.article') {
    $controller = new PostsController();
    $controller->article();
} elseif ($page === 'posts.categorie') {
    $controller = new PostsController();
    $controller->categorie();
} elseif ($page === 'login') {
    $controller = new UsersContrller();
    $controller->login();
} elseif ($page === '404') {
    require  ROOT . '/pages/posts/not_found.php';
} elseif ($page === 'admin.posts.index') {
    $controller = new \App\Controller\Admin\PostsController();
    $controller->index();
} elseif ($page === 'admin.posts.edit') {
    $controller = new \App\Controller\Admin\PostsController();
    $controller->edit();
} elseif ($page === 'admin.posts.add') {
    $controller = new \App\Controller\Admin\PostsController();
    $controller->add();
} elseif ($page === 'admin.posts.delete') {
    $controller = new \App\Controller\Admin\PostsController();
    $controller->delete();
} elseif ($page === 'admin.categories.index') {
    $controller = new \App\Controller\Admin\CategoriesController();
    $controller->index();
} elseif ($page === 'admin.categories.edit') {
    $controller = new \App\Controller\Admin\CategoriesController();
    $controller->edit();
} elseif ($page === 'admin.categories.add') {
    $controller = new \App\Controller\Admin\CategoriesController();
    $controller->add();
} elseif ($page === 'admin.categories.delete') {
    $controller = new \App\Controller\Admin\CategoriesController();
    $controller->delete();
}
