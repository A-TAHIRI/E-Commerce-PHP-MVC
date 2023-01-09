<?php



namespace App\Controller;

use Core\Controller\Controller;



class PostsController extends AppController

{
    public function __construct()
    {

        parent::__construct();
        $this->loadModel('Article');
        $this->loadModel('Categorie');
    }





    public function index()
    {
        $articles = $this->Article->last();

        $items = $this->Categorie->all();

        $this->render('posts.index', compact('articles',  'items'));
    }



    public function article()
    {
        $items = $this->Categorie->all();
        $categories = $this->Categorie->all();
        $article = $this->Article->findWithCategory($_GET['id']);
        if ($article === false) {
            $this->notFound();
        }

        $this->render('posts.article', compact('article', 'categories', 'items'));
    }




    public function categorie()
    {



        $categorie = $this->Categorie->find($_GET['id']);
        if ($categorie === false) {
            $this->notFound();
        }

        $items = $this->Categorie->all();
        $articles = $this->Article->lastByCategorie($_GET['id']);
        $categories = $this->Categorie->all();
        // App::setTitle($categorie->nom_Categorie);
        $this->render('posts.categorie', compact('articles', 'categories', 'categorie', 'items'));
    }


    public function notF()
    {

        $items = $this->Categorie->all();

        $this->render('posts.not_found', compact('items'));
    }
}
