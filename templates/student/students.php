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
    <?php if(isStudent()): ?>

        <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
        <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    

      
    <div id="contenu">
        

        
        
        <section class="program">
                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/stud.svg" alt="1">
                </div>
            <!--<h2>[Programmes]</h2>-->
            <button class="top prog">Cours</button>
            <div class="panel course">
            <?php if($_['progCourse']):?>
                <br>
                <div class="agenda">
                    <div class="agenda-row">
                        <div class="agenda-col">[Matière]
                            <?php foreach($_['progCourse'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['course'] ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="agenda-col">[Date]
                            <?php foreach($_['progCourse'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['theDate'] ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="agenda-col">[Heure]
                            <?php foreach($_['progCourse'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['theHour'] ?></div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div><br>
                <?php else:?>
                <h3>(Rien pour le moment)</h3>
                <?php endif ?>
            </div>
    
            <button class="prog">Devoirs</button>
            <div class="panel dev">
                <!--<div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/exams.svg" alt="1">
                </div>-->
                <?php if($_['progExam']):?>
                <br>
                <div class="agenda">
                    <div class="agenda-row">
                        <div class="agenda-col">[Matière]
                            <?php foreach($_['progExam'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['course'] ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="agenda-col">[Date]
                            <?php foreach($_['progExam'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['theDate'] ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="agenda-col">[Heure]
                            <?php foreach($_['progExam'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['theHour'] ?></div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div><br>
                <?php else:?>
                <h3>(Rien pour le moment)</h3>
                <?php endif ?>
            </div>
    
            <button class="bottom prog">Interrogations</button>
            <div class="bottom panel inter">
                <!--<div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/working.svg" alt="1">
                </div>-->
                <?php if($_['progInterro']):?>
                <br>
                <div class="agenda">
                    <div class="agenda-row">
                        <div class="agenda-col">[Matière]
                            <?php foreach($_['progInterro'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['course'] ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="agenda-col">[Date]
                            <?php foreach($_['progInterro'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['theDate'] ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="agenda-col">[Heure]
                            <?php foreach($_['progInterro'] as $prog): ?>
                                <div class="agenda-col-row"><?=$prog['theHour'] ?></div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div><br>
                <?php else:?>
                <h3>(Rien pour le moment)</h3>
                <?php endif ?>
            </div>
        </section>
            
        

    </div>

    

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>