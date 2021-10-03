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
    <?php if(isParent()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    
      
    <div id="contenu">

        <section class="program section">
            <div class="container-program">
                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/parents.svg" alt="1">
                </div>
                <form action="" method="POST">

                    <p>Voir les résultats de votre enfant</p><br>
                    <table>
                        <tr><td><label for="matricule">Matricule:</label></td><td><input type="text" id="matricule" name="matricule" required></td></tr>
                        <tr><td><label for="codeParent">Code parent:</label></td><td><input type="text" id="codeParent" name="codeParent" required></td></tr>
                    </table>
                    <input class="envoie" type="submit" value="Valider">
    
                </form>
            </div>
        </section>

    </div>

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>