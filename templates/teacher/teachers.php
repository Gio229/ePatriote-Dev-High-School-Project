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
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    

      
    <div id="contenu">

        
        
        <section class="program section">
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/intero.svg" alt="1">
                </div>
                <!--<form action="" method="POST">

                    <p>Programmer une interrogation</p><br>
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
    
                </form>-->
                

                <p>Programmer une interrogation</p>
                <!--<form action="" method=""><table>
                    <tr><td><label for="mail">Email:</label></td><td><input type="email" id="mail" name="mail"></td></tr>
                    <tr><td><label for="password">Mot de passe:</label></td><td><input type="password" id="password" name="password" required></td></tr>
                </table>
                <input class="envoie" type="submit"></form>-->
                <?= $_['form_progInterro'] ?>
            
            </div>
        </section>
            
        <section class="program section">
            <h1>[Mes élèves]</h1>

        
            <div class="container-program">

                <!--<div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/teacherView.svg" alt="1">
                </div>-->

                <div>
                    <ul class="tabs">
                        <?php foreach($_['teachingInfos'] as $i): ?>
                                
                            <?php if( $i['classroom'] == "seconde"): ?>     
                                <li class="tab-active">
                                     <a href="#Seconde">Seconde</a>
                                </li>
                            <?php endif ?>
                                                            
                        <?php endforeach ?>

                        <?php foreach($_['teachingInfos'] as $i): ?>
                                
                            <?php if( $i['classroom'] == "première"): ?>     
                                <li class="tab-active">
                                    <a href="#Première">Première</a>
                                </li>
                            <?php endif ?>
                                                                
                        <?php endforeach ?>

                        <?php foreach($_['teachingInfos'] as $i): ?>
                                
                                <?php if( $i['classroom'] == "terminale"): ?>     
                                    <li class="tab-active">
                                        <a href="#Terminale">Terminale</a>
                                    </li>
                                <?php endif ?>
                                                                    
                        <?php endforeach ?>
                        

                    </ul>
                    <div class="tabs-content">
                        <div class="tab-content tab-active transit" id="fake"></div>
                        <div class="tab-content  transit" id="Seconde">
                            <h3>Liste des élèves de la seconde</h3><br>
                            <div class="agenda">
                                <div class="agenda-row">
                                    <div class="agenda-col">[Nom]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "seconde"): ?>
                                                <div class="agenda-col-row"><?=$student['lastName'] ?></div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">[Prénom(s)]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "seconde"): ?>
                                                <div class="agenda-col-row"><?=$student['firstName'] ?></div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                    
                                </div>
                            </div><br>
                            
                        </div>
                        <div class="tab-content" id="Première">
                            <h3>Liste des élèves de la première</h3><br>
                            
                            <div class="agenda">
                                <div class="agenda-row">
                                    <div class="agenda-col">[Nom]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "première"): ?>
                                                <div class="agenda-col-row"><?=$student['lastName'] ?></div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">[Prénom(s)]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "première"): ?>
                                                <div class="agenda-col-row"><?=$student['firstName'] ?></div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                    
                                </div>
                            </div><br>
                        </div>
                        <div class="tab-content" id="Terminale">
                            <h3>Liste des élèves de la terminale</h3><br>
                            <div class="agenda">
                                <div class="agenda-row">
                                    <div class="agenda-col">[Nom]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "terminale"): ?>
                                                <div class="agenda-col-row"><?=$student['lastName'] ?></div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">[Prénom(s)]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "terminale"): ?>
                                                <div class="agenda-col-row"><?=$student['firstName'] ?></div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                    
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="program">
            <!--<button class="openNote" onclick="openNote()">Notez mes élèves</button>-->

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
        </div>

    </div>

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
