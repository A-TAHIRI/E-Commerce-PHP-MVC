<form method="post">
    <h4>Ajouter la categorie</h4> <a href="index.php?p=admin.categories.index" class="btn btn-warning   button">Retourner à l'accueil</a>
    <fieldset>
        <div class="mb-3">
            <label class="form-label">IdCategorie</label>
            <input type="text" name="id" id="disabledTextInput" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="nom_Categorie" id="disabledTextInput" class="form-control">
        </div>


        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image_Categorie" id="disabledTextInput" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Publier</button>

    </fieldset>
</form>