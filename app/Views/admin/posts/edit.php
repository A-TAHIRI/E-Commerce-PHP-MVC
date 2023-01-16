<h1>Modifier l'article</h1> <a href="index.php?p=admin.posts.index" class="btn btn-warning   button">Retourner à l'accueil</a>

<form method=post>
    <fieldset>
        <div class="mb-3">
            <label class="form-label">Id</label>
            <input type="text" name="id" id="disabledTextInput" value="<?= $post->id ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="nom_Article" id="disabledTextInput" value="<?= $post->nom_Article  ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Quantité</label>
            <input type="number" name="Quantité" id="disabledTextInput" value="<?= $post->Quantité  ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description_Article" id="disabledTextInput" value="<?= $post->description_Article  ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prix_Article" id="disabledTextInput" value="<?= $post->prix_Article ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Image1</label>
            <input type="file" name="image1_Article" id="disabledTextInput" value="<?= $post->image1_Article ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image2</label>
            <input type="file" name="image2_Article" id="disabledTextInput" value="<?= $post->image2_Article ?>" class="form-control" required>
        </div>
        <?= $form->select('id_categories', 'Catégorie ', $categories); ?>
        <button type="submit" class="btn btn-primary">Confirmer</button>

    </fieldset>
</form>