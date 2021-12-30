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
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/undraw_playful_cat_re_bxiu.svg" alt="1">
                </div>
                

                <div>Matière: <h4 style="display: inline;"><?= $_['temp']['course']?></h2></div>
                <div>Elève: <?= $_['student'][0]['lastName'] . ' ' .$_['student'][0]['firstName']?></div>
                <div>Classe: <?= $_['student'][0]['classroom']?></div>
                <br>!Détails
                
                <div class="agenda" style="background-color: black; color: white;">
                                <div class="agenda-row">
                                    <div class="agenda-col">Interro 1

                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                            <div class="agenda-col-row"><?=$detail['ni1'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Interro 2
                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                            <div class="agenda-col-row"><?=$detail['ni2'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Interro 3
                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                            <div class="agenda-col-row"><?=$detail['ni3'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Moy Interro
                                        <?php foreach($_['details'] as $detail): ?>
                                        
                                            <div class="agenda-col-row"><?=$detail['mi'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Dev 1
                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                            <div class="agenda-col-row"><?=$detail['nd1'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Dev 2
                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                            <div class="agenda-col-row"><?=$detail['nd2'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Moy Dev
                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                            <div class="agenda-col-row"><?=$detail['md'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    <div class="agenda-col">Semestre
                                        <?php foreach($_['details'] as $detail): ?>
                                            
                                                <div class="agenda-col-row"><?=$detail['sem'] ?></div>
                                            
                                        <?php endforeach ?>
                                    </div>
                                    
                                </div>
                                
                </div><br>
                
                <div class="next"></div>
            </div>
            <?= $_['form_note']?>
        </section>

        

    </div>

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
