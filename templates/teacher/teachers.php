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
    <?php if(isTeacher()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
      
    <div id="contenu">
        <h1>[Interface utilisateur (teachers)]</h1>

        <br><br>
        
        <section class="program">
            <h2>[Programmer une interrogation]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/intero.svg" alt="1">
                </div>
                <form action="" method="POST">

                    <p>Remplissez les champs pour programmer votre interrogation</p><br>
                    <table>
                        <tr><td><label for="classes">classes:</label></td><td>
                            <select name="classes" id="classes" required>
                                <option value="seconde">seconde</option>
                                <option value="première">première</option>
                                <option value="terminnale">terminnale</option>
                            </select>
                        </td></tr>
                        <tr><td><label for="day">Date:</label></td><td><input type="date" id="day" name="day" required></td></tr>
                        <tr><td><label for="hour">Heure:</label></td><td><input type="time" id="hour" name="hour" required></td></tr>
                    </table>
                    <input class="envoie" type="submit" value="Valider">
    
                </form>
            </div>
        </section>
            <br><br><br> <br><br><br> 
        <section class="program">
            <h2>[Voir la liste de mes élèves]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/teacherView.svg" alt="1">
                </div>

                <div>
                    <ul class="tabs">
                        <li class="tab-active">
                             <a href="#Seconde">Seconde</a>
                        </li>
                        <li>
                             <a href="#Première">Première</a>
                        </li>
                        <li>
                            <a href="#Terminale">Terminale</a>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab-content tab-active transit" id="Seconde">
                            <h3>(Rien pour le moment)</h3>
                        </div>
                        <div class="tab-content" id="Première">
                            <h3>(Rien pour le moment)</h3>
                        </div>
                        <div class="tab-content" id="Terminale">
                            <h3>(Rien pour le moment)</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <button class="openNote" onclick="openNote()">Notez mes élèves</button>

        <div id="note" class="note">
            <button href="javascript:void(0)" class="closeNote" onclick="closeNote()">&times;</button>
            

            <form action="" method="POST">

                <p>Renseignez la classe</p><br>
                <table>
                    <tr><td><label for="classes">classes:</label></td><td>
                        <select name="classes" id="classes" required>
                            <option value="seconde">seconde</option>
                            <option value="première">première</option>
                            <option value="terminnale">terminnale</option>
                        </select>
                    </td></tr>
                </table>
                <input class="envoie" type="submit" value="Valider">

            </form>
            <table class="note-table">
                <tr><th>Noms</th><th>Notes</th></tr>
                <tr><td>élève 1</td><td>10</td></tr>
                <tr><td>élève 2</td><td>10</td></tr>
            </table>
            <form action="" method="POST">

                <p>Notez un élève</p><br>
                <table>
                    <tr><td><label for="student">Elève:</label></td><td>
                        <select name="student" id="student" required>
                            <option value="1">élève 1</option>
                            <option value="1">élève 2</option>
                        </select>
                    </td></tr>
                    <tr><td><label for="studentNote">Note:</label></td><td><input type="number" id="studentNote" name="studentNote" required></td></tr>
                    </table>
                <input class="envoie" type="submit" value="Valider">

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
