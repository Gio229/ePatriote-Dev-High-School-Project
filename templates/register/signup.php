<!DOCTYPE html>
<html>
    <head>
        <title>ePatriote Dev High School</title>
        <meta charset="utf-8" />
        <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css" />
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/form.css" />
    </head>
    <body>

        <header>

            <?php include_once($ep_project_root . '/templates/layouts/homeNav.php'); ?>

        </header>

        <div id="contenu">
            <h1>[Inscription]</h1>

            <div class="contain-full">
                <img src="<?= $ep_base_dir ?>/img/sign.svg" alt="1">
            </div>

            <br><br>
            <form action="" method="POST">

                <p>Veuillez remplir convenablement les champs ci-dessous.</p><br>
                <!--<table>-->
                    <!--<tr><td><label for="nom">Nom:</label></td><td><input type="text" id="nom" name="nom"required autofocus></td></tr>
                    <tr><td><label for="prenom">Prénom(s):</label></td><td><input type="text" id="prenom" name="prenom"required></td></tr>
                    <tr><td><label for="password">Mot de passe:</label></td><td><input type="password" id="password" name="password" required></td></tr>
                    <tr><td><label for="mail">Email:</label></td><td><input type="email" id="mail" name="mail"></td></tr>-->
                    <?= $_['form'] ?>
                <!--</table>
                <input class="envoie" type="submit">-->

            </form>
        </div>

        <?php include_once($ep_project_root . '/templates/layouts/footer.php'); ?>

</html>