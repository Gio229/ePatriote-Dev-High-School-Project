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
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/management.css" />
</head>
<body>
    <?php if(isCensor()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    
      
    <div id="contenu">

        <br><br>

        <section class="management ">

            <div class="management-content">
                 <br>
                <!--<form class="form ">-->
                    <?= $_['form_teaching'] ?>
                <!--</form>-->

            </div>

            <div class="management-illustration">
                <p>Confier/Retirer une classe à un professeur</p>
            </div>

        </section>

        <section>
        <p>Donner/Retirer le rôle de professeur</p>
                <!--<form class="form" action="" method="POST">

                            <p>Confier/Retirer une classe à un professeur</p><br>
                            <table>
                                <tr><td><label for="userName">Nom utilisateur:</label></td><td><input type="text" id="userName" name="userName" required></td></tr>
                                <tr><td><label for="userName">Email utilisateur:</label></td><td><input type="email" id="mail" name="mail" required></td></tr>
                                <tr><td><label for="classe">Classe:</label></td><td><input type="text" id="classe" name="classe" required></td></tr>
                                <tr><td><label for="course">Matière:</label></td><td><input type="text" id="course" name="course" required></td></tr>
                                <tr><td><label for="pass">Votre mot de passe:</label></td><td><input id="pass" type="password" name="pass" required></td></tr>
                            </table>
                            <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
            
                </form>-->
                <?= $_['form_role'] ?>


        </section>


    </div>

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
