<form method="post">
    <h1>Modifier l'article</h1>

    <?= $form->input('nom_Article', 'Titre '); ?>
    <?= $form->input('Quantité', 'Quantité '); ?>

    <?= $form->input('description_Article', 'Description '); ?>

    <?= $form->input('prix_Article', 'Prix '); ?>
    <?= $form->input('image1_Article', 'Image1 ', ['type' => 'file']); ?>
    <?= $form->input('image2_Article', 'Image2 ', ['type' => 'file']); ?>
    <?= $form->select('id_categories', 'Catégorie ', $categories); ?>


    <button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>

</form>