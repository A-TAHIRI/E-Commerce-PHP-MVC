<form method="post">
    <h4>Modifièr la categorie</h4>

    <?= $form->input('nom_Categorie', 'Titre '); ?>
    <?= $form->input('image_Categorie', 'Image ', ['type' => 'file']); ?> <button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>

</form>