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
            <br>

            <div class="contain-full">
                <img src="<?= $ep_base_dir ?>/img/contacts.svg" alt="1">
            </div>

            
            <form  method="POST">
                <p><?= $_['error'] ?></p>
                <h1>[Nous contacter]</h1><br>
                <?= $_['form'] ?>
            </form>
        </div>

        <?php include_once($ep_project_root . '/templates/layouts/footer.php'); ?>

    </body>
</html>