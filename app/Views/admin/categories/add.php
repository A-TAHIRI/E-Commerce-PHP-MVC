<form method="post">
    <h4>Modifièr la categorie</h4> <a href="index.php?p=admin.categories.index" class="btn btn-warning   button">Retourner à l'accueil</a>

    <?= $form->input('nom_Categorie', 'Titre '); ?>
    <?= $form->input('image_Categorie', 'Image ', ['type' => 'file']); ?> <button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>

</form>