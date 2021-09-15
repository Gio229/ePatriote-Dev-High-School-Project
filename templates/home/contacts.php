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
            <h1>[Nous contacter]</h1>

            <div class="contain-full">
                <img src="<?= $ep_base_dir ?>/img/contacts.svg" alt="1">
            </div>

            <br><br>
            <form action="" method="POST">

                <p>Laissez-nous un message</p><br>
                <table>
                    <tr><td><label for="mail">Email:</label></td><td><input type="email" id="mail" name="mail"></td></tr>
                    <tr><td><label for="message">message:</label></td><td><textarea id="password" name="password" required></textarea></td></tr>
                </table>
                <input class="envoie" type="submit">

            </form>
        </div>

        <?php include_once($ep_project_root . '/templates/layouts/footer.php'); ?>

    </body>
</html>