<div class=" divfieldset container-fluid">
    <div id="app" class="row justify-content-center  ">
        <h4><?= $article->categorie ?></h4>
        <h5> <?= $article->getDescription() ?></h5>
        <h5><span class="prix"> <?= $article->getPrix() ?> </span></h5>

        <fieldset class=" acol-ms-12 col-md-5 col-lg-3 ">
            <article class="f1 ">


                <img id="photo1" <?= $article->getImage1() ?> alt="bijoux" height="">
                <img id="photo1" <?= $article->getImage2() ?> alt="bijoux" height="">
            </article>


        </fieldset>


    </div>
</div>

<a href="index.php?p=posts.index" class="btn btn-warning   button">Retourner à l'accueil</a>
<style type="text/css">
    a.button {
        margin: 20px;
    }
</style>