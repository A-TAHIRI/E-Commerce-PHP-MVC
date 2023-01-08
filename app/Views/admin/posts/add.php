<h1>Ajouter l'article</h1>

<form method=post>
    <fieldset>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="nom_Article" id="disabledTextInput" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Quantité</label>
            <input type="number" name="Quantité" id="disabledTextInput" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description_Article" id="disabledTextInput" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prix_Article" id="disabledTextInput" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Image1</label>
            <input type="file" name="image1_Article" id="disabledTextInput" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image2</label>
            <input type="file" name="image2_Article" id="disabledTextInput" class="form-control" required>
        </div>
        <?= $form->select('id_categories', 'Catégorie ', $categories); ?>
        <button type="submit" class="btn btn-primary">Publier</button>

    </fieldset>
</form>