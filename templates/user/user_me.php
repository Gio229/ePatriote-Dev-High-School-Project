<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Curvy</title>
    <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/usersInterface.css">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/form.css" />
</head>
<body>
    <?php if(isAuthenticated()): ?>
    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
      
    <div id="contenu">
        <h1>[Salle d'attente]</h1>

        <br><br>
        <section class="program">
            <h2>[En attente de votre autorisation]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/Loading.svg" alt="1">
                </div>
            </div>
        </section>

    </div>

    <?php include_once($ep_project_root . '/templates/layouts/footer.php'); ?>
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>