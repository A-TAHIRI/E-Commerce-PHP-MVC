<?php

namespace App\Controller\Admin;





class ArticlesController extends AppController

{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Article');
    }
    public function index()
    {
        $articles = $this->Article->all();
        $this->render('admin.posts.index', compact('articles'));
    }



    public function add()
    {

        if (!empty($_POST)) {


            $result = $this->Article->create(

                [
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
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->rende('admin.post.add', compact('categories', 'form'));
    }




    public function edit()
    {


        if (!empty($_POST)) {


            $result = $this->Article->update(
                $_GET['id'],


                [
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
        $form = new \Core\HTML\BootstrapForm($post);
        $this->rende('admin.post.edit', compact('categories', 'form'));
    }
    public function delete()
    {


        if (!empty($_POST)) {


            $result = $this->Article->delete($_POST['id']);

            return $this->index();
        }
    }
}
