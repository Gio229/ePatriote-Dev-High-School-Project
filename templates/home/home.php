<!DOCTYPE html>
<html>
    <head>
        <title>ePatriote Dev High School</title>
        <meta charset="utf-8" />
        <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css" />
    </head>
    <body >
        <div class="home">
            <header class="entete" id="contenu">

            <?php include_once($ep_project_root . '/templates/layouts/homeNav.php'); ?>    

            <div>
                
                <div class="texte">
                    <h1 id="title">ePatriote Dev High School</h1>
                    <h3 id="sub-title">L'expertise à votre service</h3>
                </div>
    
                <div class="bouton">
                    <a href="#v">
                        <img src="<?= $ep_base_dir ?>/img/suivant.png" alt="suivant">
                    </a>
                </div>

            </div>
            
            <div id="v"></div>
            </header>
        </div>
        


        <!-- <section class="container container-gray">

            <div class="illustration">
                <img class="illustration-img" src="<?= $ep_base_dir ?>/img/sign.svg" alt="1">
            </div>

            <div class="content">
                <h2>Inscivez vous</h2>
                <span>en un click</span>
                <div><a href="/register" class="click">ici</a></div>
            </div>

        </section>

        <section id="mobile" class="container container-yellow">

            <div class="content">
                <h2>Retrouvez-nous sur mobile</h2>
            </div>

            <div class="illustration">
                <img class="illustration-img" src="<?= $ep_base_dir ?>/img/undraw_mobile_images_rc0q.svg" alt="2">
            </div>

        </section>

        <section id="abouts" class="container container-gray">
            <div class="illustration">
                <img class="illustration-img" src="<?= $ep_base_dir ?>/img/team.svg" alt="2">
            </div>

            <div class="content">
                <h2 class="titre">A propos de nous</h2>
                <p> 
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Dolores harum neque rerum totam at quia aut non, nulla autem quod
                    esse aliquam quidem sapiente perspiciatis deserunt reprehenderit 
                    facilis ducimus vitae... <a class="link" href="abouts.html">plus d'informations</a>
                </p>
            </div>

        </section>

        <section id="contacts" class="container container-yellow">

            <div class="content">
                <h2>Nous contacter</h2>
            </div>

            <div class="illustration">
                <img class="illustration-img" src="<?= $ep_base_dir ?>/img/contacts.svg" alt="2">
            </div>

        </section> -->

<!--<a href="/student/me">usersInterface(élèves)</a>
<a href="/parent/me">usersInterface(parents)</a>
<a href="/teacher/me">usersInterface(teachers)</a>
<a href="/administration/censor">usersInterface(Censor)</a>
<a href="/administration/InformaticService">serviceInformatique</a>
<a href="/administration/editEleve">editEleve</a>-->


        <?php include_once($ep_project_root . '/templates/layouts/footer.php'); ?> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="<?= $ep_base_dir ?>/js/home.js"></script>

    </body>
</html>