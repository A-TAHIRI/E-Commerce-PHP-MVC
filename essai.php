<form method="post">
    <?= $form->input('pseudo_Client', 'Pseudo') ?>

    <?= $form->input('pss_Client', 'Mot de passe'), ['type' => 'password'] ?>
    <button class="btn btn-primary">Envoyer</button>
</form>
<!-- /////////////////////////////////////////-->

<?= $form->input('nom_Article', 'Titre '); ?>
<?= $form->input('Quantité', 'Quantité '); ?>

<?= $form->input('description_Article', 'Description '); ?>

<?= $form->input('prix_Article', 'Prix '); ?>
<?= $form->input('image1_Article', 'Image1 ', ['type' => 'file']); ?>
<?= $form->input('image2_Article', 'Image2 ', ['type' => 'file']); ?>
<?= $form->select('id_categories', 'Catégorie ', $categories); ?>


<button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>






<?php


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
    $controller = new UsersController();
    $controller->login();
} elseif ($page === '404') {
    $controller = new PostsController();
    $controller->notF();
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
