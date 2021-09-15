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
    <?php if(isCensor()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
      
    <div id="contenu">
        <h1>[Interface utilisateur (Censor)]</h1>

        <br><br>

        <section class="program">
            <h2>[Programmer des devoirs]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/exams.svg" alt="1">
                </div>
                <form action="" method="POST">

                    <p>Remplissez les champs pour programmer un devoir</p><br>
                    <table>
                        <tr><td><label for="classes">Classes:</label></td><td>
                            <select name="classes" id="classes" required>
                                <option value="seconde">seconde</option>
                                <option value="première">première</option>
                                <option value="terminnale">terminnale</option>
                            </select>
                        </td></tr>
                        <tr><td><label for="day">Date:</label></td><td><input type="date" id="day" name="day" required></td></tr>
                        <tr><td><label for="hour">Heure:</label></td><td><input type="time" id="hour" name="hour" required></td></tr>
                        <tr><td><label for="matiere">Matière:</label></td><td><input type="text" id="matiere" name="matiere" required></td></tr>
                    </table>
                    <input class="envoie" type="submit" value="Valider" onClick="return confirm('Voulez-vous appliquer ?')">
    
                </form>
            </div>
        </section>

        <section class="program">
            <h2>[Gestion]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/censor.svg" alt="1">
                </div>

                <div>
                    <button class="openNote" onclick="openNote()">Gérer les professeurs</button>
        
                    <div id="note" class="note">
                        <button href="javascript:void(0)" class="closeNote" onclick="closeNote()">&times;</button>
                        
                        <form action="" method="POST">

                            <p>Accordez des droits de professeur à un utilisateur</p><br>
                            <table>
                                <tr><td><label for="userName">Nom utilisateur:</label></td><td><input type="text" id="userName" name="userName" required></td></tr>
                                <tr><td><label for="userName">Email utilisateur:</label></td><td><input type="email" id="mail" name="mail" required></td></tr>
                                <tr><td><label for="classe">Classe:</label></td><td><input type="text" id="classe" name="classe" required></td></tr>
                                <tr><td><label for="course">Matière:</label></td><td><input type="text" id="course" name="course" required></td></tr>
                                <tr><td><label for="pass">Votre mot de passe:</label></td><td><input id="pass" type="password" name="pass" required></td></tr>
                            </table>
                            <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
            
                        </form>
                    </div>
                </div>
                <div>
                    <button class="openNote" onclick="openManagParents()">Gérer les parents d'élève</button>
        
                    <div id="manag-parents" class="note">
                        <button href="javascript:void(0)" class="closeNote" onclick="closeManagParents()">&times;</button>
                        
                        <form action="" method="POST">

                            <p>Accordez des droits de parent à un utilisateur</p><br>
                            <table>
                                <tr><td><label for="userName">Nom utilisateur:</label></td><td><input type="text" id="userName" name="userName" required></td></tr>
                                <tr><td><label for="userName">Email utilisateur:</label></td><td><input type="email" id="mail" name="mail" required></td></tr>
                                <tr><td><label for="matricule">Matricule élève:</label></td><td><input type="text" id="matricule" name="matricule" required></td></tr>
                                <tr><td><label for="pass">Votre mot de passe:</label></td><td><input id="pass" type="password" name="pass" required></td></tr>
                            </table>
                            <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
            
                        </form>
                    </div>
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
                            <h3>Gérer les élèves</h3>
                            <table class="note-table" style="background-color: white;">
                                <tr><th>Nom</th><th>Prénom(s)</th></tr>
                                <tr>
                                    <td>yucye</td>  
                                    <td>evc eh</td>
                                    <td><a href="/administration/editEleve" class="edit">Editer</a></td>
                                    <td><a href="#" class="delete" onClick="return confirm('Voulez-vous vraiment supprimer cet élève ?')">Supprimer</a></td>
                                </tr>
                                <tr>
                                    <td>dksjvn</td>
                                    <td>zkejz</td>
                                    <td><a href="/administration/editEleve" class="edit">Editer</a></td>
                                    <td><a href="#" class="delete" onClick="return confirm('Voulez-vous vraiment supprimer cet élève ?')">Supprimer</a></td>
                                </tr>
                            </table>
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
        </section><br><br>  
        <section class="program">
            <h2>[Publier les résultats]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/bulletins.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
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
