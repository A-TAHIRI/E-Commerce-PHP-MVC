<?php



namespace App\Controller;

use Core\Controller\Controller;



class ArticlesController extends AppController

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
        $categories = $this->Categorie->all();

        $this->render('posts.index', compact('articles', 'categories'));
    }



    public function article()
    {
    }






    public function categorie()
    {



        $categorie = $this->Article->find($_GET['id']);
        if ($categorie === false) {
            $this->notFound();
        }


        $articles = $this->Article->lastByCategorie($_GET['id']);
        $categories = $this->Categorie->all();
        // App::setTitle($categorie->nom_Categorie);
        $this->render('posts.article', compact('articles', 'categories', 'categorie'));
    }

    public function login()
    {
    }
}
