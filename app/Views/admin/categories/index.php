<a class="btn btn-info" href="index.php?p=admin.categories.index">Administrer les categories</a> <a class="btn btn-info" href="index.php?p=admin.posts.index">Administrer les articles</a>
<h1>Administrer les categories</h1>

<p><a href="?p=admin.categories.add" class="btn btn-success">Ajouter</a></p>
<table class="table">

    <thead>
        <tr>

            <td>ID</td>
            <td>Titre</td>
            <td>Image</td>
            <td>Actions</td>

        </tr>

    </thead>

    <tbody>

        <?php foreach ($items as $categorie) : ?>
            <tr>
                <td>
                    <?= $categorie->id; ?>
                </td>
                <td>
                    <?= $categorie->nom_Categorie; ?>
                </td>
                <td><img src="<?= $categorie->image_Categorie ?>" width="100" height="100" alt=""></td>

                <td>
                    <a href="?p=admin.categories.edit&id=<?= $categorie->id; ?>" class="btn btn-primary">Editer</a>
                    <form action="?p=admin.categories.delete" method="post" style="display : inline-block">
                        <input type="hidden" name="id" value="<?= $categorie->id; ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>