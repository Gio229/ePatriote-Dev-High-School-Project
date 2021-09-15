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
      
    <div id="contenu">
        <h1>[Interface utilisateur (élèves)]</h1>

        <br><br>
        
        <section class="program">
            <h2>[Programmes]</h2>
            <button class="top prog">Cours</button>
            <div class="panel">
                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/classes.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
            </div>
    
            <button class="prog">Devoirs</button>
            <div class="panel">
                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/exams.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
            </div>
    
            <button class="bottom prog">Interrogations</button>
            <div class="bottom panel">
                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/working.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
            </div>
        </section>
            <br><br><br> <br><br><br> 
        <section class="program">
            <h2>[Voir mes résultats]</h2>
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