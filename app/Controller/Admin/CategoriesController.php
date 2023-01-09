<?php

namespace App\Controller\Admin;





class CategoriesController extends AppController

{

    public function __construct()
    {
        parent::__construct();

        $this->loadModel('Categorie');
    }
    public function index()

    {
        $items = $this->Categorie->all();


        $this->render('admin.categories.index', compact('items'));
    }



    public function add()
    {

        if (!empty($_POST)) {


            $result = $this->Categorie->create(

                [
                    'nom_Article' => $_POST['nom_Categorie'],
                    'image_Categorie' => $_POST['image_Categorie'],
                ]
            );


            return $this->index();
        };
        $items = $this->Categorie->all();
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.categories.add', compact('form',  'items'));
    }




    public function edit()
    {


        if (!empty($_POST)) {


            $result = $this->Categorie->update(
                $_GET['id'],


                [
                    'nom_Categorie' => $_POST['nom_Categorie'],
                    'image_Categorie' => $_POST['image_Categorie'],
                ]
            );


            return $this->index();
        }



        $categorie = $this->Categorie->find($_GET['id']);
        $items = $this->Categorie->all();

        $form = new \Core\HTML\BootstrapForm($categorie);
        $this->render('admin.categories.edit', compact('form', 'categorie', 'items'));
    }
    public function delete()
    {


        if (!empty($_POST)) {


            $result = $this->Categorie->delete($_POST['id']);

            return $this->index();
        }
    }
}
