<!DOCTYPE html>
<html>
    <head>
        <title>ePatriote Dev High School</title>
        <meta charset="utf-8" />
        <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css">
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/usersInterface.css">
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/form.css" />
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/management.css" />
    </head>
    <body>

        <header>

            <?php //include_once($ep_project_root . '/templates/layouts/homeNav.php'); ?>

        </header>
        <br>
        <div id="contenu">
            

            <div class="contain-full illustration-program">
                <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/sign.svg" alt="1">
            </div>

            <br>
            <form action="" method="POST">

            <h1>[Inscription]</h1>
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