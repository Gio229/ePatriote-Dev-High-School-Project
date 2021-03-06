<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer</title>
    <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/usersInterface.css">
    <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/form.css" />
</head>
<body>
    <?php if(isCensor()): ?>
    
    <div id="contenu">
        <form action="" method="POST">

            <p>Editer les informations de l'élève</p><br>
            <table>
                <tr><td><label for="classes">Classes:</label></td><td>
                    <select name="classes" id="classes" required>
                        <option value="seconde">seconde</option>
                        <option value="première">première</option>
                        <option value="terminnale">terminnale</option>
                    </select>
                </td></tr>
            </table>
            <input class="envoie" type="submit" value="Valider" onClick="return confirm('Voulez-vous appliquer ?')">

        </form>
    </div>

    <footer>

        <div class="leftfoot">
            <p><a class="navLink" href="#">L'administration</a></p><br>
            <p><a class="navLink" href="#">Nos services</a></p><br>
            <p><a class="navLink" href="#">Nos formations</a></p><br>
            <p><a class="navLink" href="#">Contacts</a></p><br>
            <p><a class="navLink" href="#">S'inscrire</a></p><br>
            <p><a class="navLink" href="#">Se connecter</a></p>
        </div>

        <div class="rightfoot">
            <p><span style="color: #999;">©ATCHAOUE Giovanni</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nesciunt harum nam ullam deserunt numquam quisquam asperiores h
                ic facilis architecto ipsa recusandae, necessitatibus magni ab
                 veniam saepe iure dolore sint fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laborum, quia alias delectus natus velit maiores, 
                vel error excepturi ex hic quasi doloremque iure vitae ipsam, odio sin
                t maxime eum.</p>
        </div>
        
    </footer>
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="../../public/js/usersInterface.js"></script>
</html>