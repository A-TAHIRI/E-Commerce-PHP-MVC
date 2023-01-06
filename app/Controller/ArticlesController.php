<?php



namespace App\Controller;

use Core\Controller\Controller;
use \App;

class ArticlesController extends AppController
{
    public function index()
    {
        $articles = App::getInstance()->getTable('Article')->last();


        $this->render('posts.index', compact('articles'));
    }



    public function article()
    {
    }






    public function categorie()
    {
    }

    public function login()
    {
    }
}
