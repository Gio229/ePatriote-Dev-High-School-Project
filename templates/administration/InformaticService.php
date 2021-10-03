<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePatriote Dev High School</title>
    <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/usersInterface.css">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/form.css" />
</head>
<body>
    <?php if(isAdmin()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    
      
    <div id="contenu">

        <section class="program section">
            <div class="container-program">

                
                <form action="" method="POST">

                    <p>Entrer le mot de passe pour mettre le site en maintenance</p><br>
                    <table>
                        <tr><td><input type="password" name="passMaintenance" required></td></tr>
                    </table>
                    <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
    
                </form>
            </div>
        </section>

        <section class="program section">
            <nav>
                
            </nav>

            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/undraw_statistic_chart_38b6.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
            </div>
        </section>
        

    </div>

    

    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
