<?php

namespace App\Controller;




use \App;




class UsersController extends AppController
{
    public function __construct()
    {
        parent::__construct();

        $this->loadModel('Categorie');
    }


    public function login()
    {
        $errors = false;

        if (!empty($_POST)) {
            $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
            if ($auth->login($_POST['pseudo_Client'], $_POST['pass_Client'])) {
                header('location:index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $categories = $this->Categorie->all();

        $form = new  \Core\HTML\BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'categories', 'errors'));
    }
}
