<a class="btn btn-info" href="index.php?p=admin.posts.index">Administrer les articles</a> <a class="btn btn-info" href="index.php?p=admin.categories.index">Administrer les categories</a>
<h1>Administrer les articles</h1>

<p><a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a></p>
<table class="table">

    <thead>
        <tr>

            <td>ID</td>
            <td>Titre</td>
            <td>Quantité</td>
            <td>Description</td>
            <td>Prix</td>
            <td>Image1</td>
            <td>Image2</td>

            <td>Actions</td>


        </tr>

    </thead>

    <tbody>

        <?php foreach ($articles as $article) : ?>
            <tr>
                <td>
                    <?= $article->id; ?>
                </td>
                <td>
                    <?= $article->nom_Article; ?>
                </td>
                <td>
                    <?= $article->Quantité; ?>
                </td>
                <td>
                    <?= $article->description_Article; ?>
                </td>
                <td>
                    <?= $article->prix_Article; ?>
                </td>
                <td><img src="<?= $article->image1_Article ?>" width="100" height="100" alt=""></td>
                <td><img src="<?= $article->image2_Article ?>" width="100" height="100" alt=""></td>


                <td>
                    <a href="?p=admin.posts.edit&id=<?= $article->id; ?>" class="btn btn-primary">Editer</a>
                    <form action="?p=admin.posts.delete" method="post" style="display : inline-block">
                        <input type="hidden" name="id" value="<?= $article->id; ?>">
                        <button type="submit" href="?p=admin.posts.delete&id=<?= $article->id; ?>" class="btn btn-danger">Supprimer</button>
                    </form>



                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>