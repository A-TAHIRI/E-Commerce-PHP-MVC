<?php

namespace App\Controller\Admin;





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
        $items = $this->Categorie->all();
        $articles = $this->Article->all();
        $this->render('admin.posts.index', compact('articles', 'items'));
    }



    public function add()
    {

        if (!empty($_POST)) {


            $result = $this->Article->create(

                [
                    'id' => $_POST['id'],
                    'nom_Article' => $_POST['nom_Article'],
                    'Quantité' => $_POST['Quantité'],
                    'description_Article' => $_POST['description_Article'],
                    'prix_Article' => $_POST['prix_Article'],
                    'image1_Article' => $_POST['image1_Article'],
                    'image2_Article' => $_POST['image2_Article'],
                    'id_categories' => $_POST['id_categories']
                ]
            );

            if ($result) {
                return $this->index();
            }
        }




        $this->loadModel('Categorie');
        $categories = $this->Categorie->extract('id', 'nom_Categorie');
        $items = $this->Categorie->all();
        $form = new \Core\HTML\BootstrapForm($_POST);

        $this->render('admin.posts.add', compact('categories', 'items', 'form'));
    }




    public function edit()
    {


        if (!empty($_POST)) {


            $result = $this->Article->update(
                $_GET['id'],


                [
                    'id' => $_POST['id'],
                    'nom_Article' => $_POST['nom_Article'],
                    'Quantité' => $_POST['Quantité'],
                    'description_Article' => $_POST['description_Article'],
                    'prix_Article' => $_POST['prix_Article'],
                    'image1_Article' => $_POST['image1_Article'],
                    'image2_Article' => $_POST['image2_Article'],
                    'id_categories' => $_POST['id_categories']
                ]
            );

            if ($result) {
                return $this->index();
            }
        }



        $post = $this->Article->find($_GET['id']);
        $this->loadModel('Categorie');
        $categories = $this->Categorie->extract('id', 'nom_Categorie');
        $items = $this->Categorie->all();

        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.posts.edit', compact('categories', 'items', 'form', 'post'));
    }
    public function delete()
    {


        if (!empty($_POST)) {


            $result = $this->Article->delete($_POST['id']);

            return $this->index();
        }
    }
}
