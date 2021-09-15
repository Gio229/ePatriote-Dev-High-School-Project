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
      
    <div id="contenu">
        <h1>[Interface utilisateur (Service informatique)]</h1>

        <br><br>

        <section class="program">
            <h2>[Administrateur général]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/admin.svg" alt="1">
                </div>
                <form action="" method="POST">

                    <p>Entrer votre mot de passe pour mettre le site en maintenance</p><br>
                    <table>
                        <tr><td><input type="password" name="passMaintenance" required></td></tr>
                    </table>
                    <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
    
                </form>
            </div>
        </section>
        <br><br>
        <section class="program">
            <h2>[Statistiques du site]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/undraw_statistic_chart_38b6.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
            </div>
        </section>
        <br><br>
        <section class="program">
            <h2>[Gérer les censeurs]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/undraw_online_organizer_ofxm.svg" alt="1">
                </div>
                <form action="" method="POST">

                    <p>Accordez des droits de censeurs à un utilisateur</p><br>
                    <table>
                        <tr><td><label for="userName">Nom utilisateur:</label></td><td><input type="text" id="userName" name="userName" required></td></tr>
                        <tr><td><label for="userName">Email utilisateur:</label></td><td><input type="email" id="mail" name="mail" required></td></tr>
                        <tr><td><label for="passMaintenance">Votre mot de passe:</label></td><td><input id="passMaintenance" type="password" name="passMaintenance" required></td></tr>
                    </table>
                    <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
    
                </form>
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
