<form method="post">
    <?= $form->input('pseudo_Client', 'Pseudo') ?>

    <?= $form->input('pss_Client', 'Mot de passe'), ['type' => 'password'] ?>
    <button class="btn btn-primary">Envoyer</button>
</form>