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

    
        <section style="display: none;" id="note" >

            <div class="management ">
                <div class="management-content">
                        <br>
                    <!--<form class="form ">-->
                        <?= $_['form_student_edit'] ?>
                    <!--</form>-->

                </div>

                <div class="management-content">
                    <br>
                    <?= $_['form_student_delete'] ?>
                </div>
            </div>
            

        </section>

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
                        <li>
                            <!--<a id="man" href="" onclick="openNote()" style="pointer-events:none;">h</a>-->
                            <div class="a" id="man" href="" onclick="openNote()">&#11015;</div>
                        </li>
                        <li>
                            <!--<a id="man" href="" onclick="openNote()" style="pointer-events:none;">h</a>-->
                            <div class="a" id="man" href="" onclick="closeNote()">&#11014;</div>
                        </li>
                    </ul>
                    
                    <div class="tabs-content">
                        <div class="tab-content tab-active transit" id="Seconde">
                            <h3>Liste des élèves de la seconde</h3>
                            <div class="agenda">
                                <div class="agenda-row">
                                    <div class="agenda-col">[Nom]</div>
                                    <div class="agenda-col">[Prénom(s)]</div>
                                    <div class="agenda-col">[Email]</div>
                                </div>
                                <?php foreach($_['students'] as $student): ?>
                                <div class="agenda-row">
                                    <div class="agenda-col"><!--[Nom]-->
                                            <?php if( $student['classroom'] == "seconde"): ?>
                                                <div class="agenda-col-row"><?=$student['lastName'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    <div class="agenda-col"><!--[Prénom(s)]-->
                                            <?php if( $student['classroom'] == "seconde"): ?>
                                                <div class="agenda-col-row"><?=$student['firstName'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    <div class="agenda-col"><!--[Email]-->
                                            <?php if( $student['classroom'] == "seconde"): ?>
                                                <div class="agenda-col-row"><?=$student['email'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    
                                </div>
                                <?php endforeach ?>
                            </div><br>
                        </div>
                        <div class="tab-content" id="Première">
                            <h3>Liste des élèves de la première</h3>
                            <div class="agenda">
                                <div class="agenda-row">
                                    <div class="agenda-col">[Nom]</div>
                                    <div class="agenda-col">[Prénom(s)]</div>
                                    <div class="agenda-col">[Email]</div>
                                </div>
                                <?php foreach($_['students'] as $student): ?>
                                <div class="agenda-row">
                                    <div class="agenda-col"><!--[Nom]-->
                                            <?php if( $student['classroom'] == "première"): ?>
                                                <div class="agenda-col-row"><?=$student['lastName'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    <div class="agenda-col"><!--[Prénom(s)]-->
                                            <?php if( $student['classroom'] == "première"): ?>
                                                <div class="agenda-col-row"><?=$student['firstName'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    <div class="agenda-col"><!--[Email]-->
                                            <?php if( $student['classroom'] == "première"): ?>
                                                <div class="agenda-col-row"><?=$student['email'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    
                                </div>
                                <?php endforeach ?>
                            </div><br>
                        </div>
                        <div class="tab-content" id="Terminale">
                            <h3>Liste des élèves de la terminale</h3><br>
                            <div class="agenda">
                                <div class="agenda-row">
                                    <div class="agenda-col">[Nom]</div>
                                    <div class="agenda-col">[Prénom(s)]</div>
                                    <div class="agenda-col">[Email]</div>
                                </div>
                                <?php foreach($_['students'] as $student): ?>
                                <div class="agenda-row">
                                    <div class="agenda-col"><!--[Nom]-->
                                            <?php if( $student['classroom'] == "terminale"): ?>
                                                <div class="agenda-col-row"><?=$student['lastName'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    <div class="agenda-col"><!--[Prénom(s)]-->
                                            <?php if( $student['classroom'] == "terminale"): ?>
                                                <div class="agenda-col-row"><?=$student['firstName'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    <div class="agenda-col"><!--[Email]-->
                                            <?php if( $student['classroom'] == "terminale"): ?>
                                                <div class="agenda-col-row"><?=$student['email'] ?></div>
                                            <?php endif ?>
                                    </div>
                                    
                                </div>
                                <?php endforeach ?>
                            </div><br>
                        </div>
                    </div>  

        </div>
        

    </div>
    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
