<?php if ($errors) : ?>

    <div class="alert alert-danger">

        Identifiant incorrects
    </div>

<?php endif; ?>
<form method=post>
    <fieldset>
        <img src="images/admin.png" width="100" height="100" alt=" ">
        <legend>Se connecter</legend>
        <div class="mb-3">
            <label class="form-label">Pseudo</label>
            <input type="text" name="pseudo_Client" id="disabledTextInput" class="form-control" placeholder="Entrez votre pseudo">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="pass_Client" id="disabledTextInput" class="form-control" placeholder="Entrez votre mot de passe" required minlength>
        </div>

        <button type="submit" class="btn btn-primary">Connexion</button>
        <p></p><br>
        <p></p>
        <H6> Vous navez pas un compte ?</H6>

        <a href="#" class="class btn btn-secondary créer ">Créer un compte</a>

    </fieldset>
</form>
<style>
    a.créer {
        margin-bottom: 100px;
    }
</style>