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

            <?php //include_once($ep_project_root . '/templates/layouts/homeNav.php'); ?>

        </header>
        <br>
        <div id="contenu">
            

            <div class="contain-full">
                <img src="<?= $ep_base_dir ?>/img/authentication.svg" alt="1">
            </div>

            <br><br>
            <form action="" method="POST">

            <h1>[Connection]</h1><br>
                <!--<table>
                    <tr><td><label for="mail">Email:</label></td><td><input type="email" id="mail" name="mail"></td></tr>
                    <tr><td><label for="password">Mot de passe:</label></td><td><input type="password" id="password" name="password" required></td></tr>
                </table>
                <input class="envoie" type="submit">-->
                <?= $_['form'] ?>
            </form>
        </div>

        <?php //include_once($ep_project_root . '/templates/layouts/footer.php'); ?>

    </body>
</html>