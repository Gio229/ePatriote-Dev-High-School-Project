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
    <?php if(isTeacher()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    
      
    <div id="contenu">

                
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
                                    <div class="agenda-col">[Email]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "seconde"): ?>
                                                <div class="agenda-col-row"><?=$student['email'] ?></div>
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
                                    <div class="agenda-col">[Email]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "première"): ?>
                                                <div class="agenda-col-row"><?=$student['email'] ?></div>
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
                                    <div class="agenda-col">[Email]
                                        <?php foreach($_['students'] as $student): ?>
                                            <?php if( $student['classroom'] == "terminale"): ?>
                                                <div class="agenda-col-row"><?=$student['email'] ?></div>
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
        
        <section class="program section">
            <div class="container-program">
                Sélectionez un élève
                <!--<div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/undraw_online_organizer_ofxm.svg" alt="1">
                </div>-->
                
                <?= $_['form_note_select'] ?>

            </div>
        </section>

    </div>

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
