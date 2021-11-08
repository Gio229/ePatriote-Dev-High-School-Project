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
    <?php if(isAdmin()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    
      
    <div id="contenu">
        
        <div>
            [<span style="color: red;">!Information importante:</span>
            ici vous ne pouvez ajouter que les différents acteurs inscrit dans les données de lécole
            à savoir le censeur, les élèves, les parents d'élèves et les professeurs]
        </div>
        <div>
            [<span style="color: red;">!Information importante:</span>
            un champ supprimé revient à supprimer toute les informations relatives à cette 
            personne indépendemment de son compte utilisateur]
        </div>

        <section >
        <p>[Elèves]</p>
            <div class="management ">
                <div class="management-content">
                        <br>
                    <!--<form class="form ">-->
                        <?= $_['students_add'] ?>
                    <!--</form>-->

                </div>

                <div class="separate"></div>

                <div class="management-content">
                    <br>
                    <?= $_['form_student_delete'] ?>
                </div>
            </div>
            

        </section>

        <section >
            <p>[Professeurs]</p>     
            <div class="management ">
                <div class="management-content">
                        <br>
                    <!--<form class="form ">-->
                        <?= $_['teachers_add'] ?>
                    <!--</form>-->

                </div>

                <div class="separate"></div>
                
                <div class="management-content">
                    <br>
                    <?= $_['form_student_delete'] ?>
                </div>
            </div>
            

        </section>

        <section >
        <p>[Parents]</p>
            <div class="management ">
                <div class="management-content">
                        <br>
                    <!--<form class="form ">-->
                        <?= $_['parents_add'] ?>
                    <!--</form>-->

                </div>

                <div class="separate"></div>

                <div class="management-content">
                    <br>
                    <?= $_['form_student_delete'] ?>
                </div>
            </div>
            

        </section>

        <section >
            <p>[Censeurs]</p>
            <div class="management ">
                <div class="management-content">
                        <br>
                    <!--<form class="form ">-->
                        <?= $_['censors_add'] ?>
                    <!--</form>-->

                </div>

                <div class="separate"></div>

                <div class="management-content">
                    <br>
                    <?= $_['form_student_delete'] ?>
                </div>
            </div>
            

        </section>

    </div>

    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>
</html>
