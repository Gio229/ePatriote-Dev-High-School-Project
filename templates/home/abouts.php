<!DOCTYPE html>
<html>
    <head>
        <title>ePatriote Dev High School</title>
        <meta charset="utf-8" />
        <link rel="icon" href="<?= $ep_base_dir ?>/img/cubic.svg">
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/main.css" />
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/form.css" />
        <link rel="stylesheet" href="<?= $ep_base_dir ?>/css/abouts.css" />
    </head>
    <body>

        <header>

            <?php include_once($ep_project_root . '/templates/layouts/homeNav.php'); ?>

        </header>

        <div id="contenu">

            <h1>[A propos de nous]</h1>

            <div class="contain-full">
                <img src="<?= $ep_base_dir ?>/img/team.svg" alt="1">
            </div>

            <section id="page-content">
                <div class="pack">
                    <a href="#"><div class="represent"></div></a>
                    <h3>[vytftcvy]</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus illum pariatur amet dignissimos omnis consequuntur sint nulla voluptatum modi laudantium necessitatibus expedita saepe incidunt nemo officia, nam, quibusdam aliquid ea.</p>
                </div>

                <div class="pack">
                    <a href="#"><div class="represent"></div></a>
                    <h3>[vytftcvy]</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus doloremque sapiente voluptatum, cupiditate soluta porro blanditiis unde sunt. Laboriosam debitis minima omnis laborum. Optio cupiditate veritatis autem perspiciatis harum dignissimos?</p>
                </div>

                <div class="pack">
                    <a href="#"><div class="represent"></div></a>
                    <h3>[vytftcvy]</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quod nobis, consequuntur inventore facere illum accusantium voluptate in perspiciatis recusandae quo omnis error deserunt excepturi dolorem quae suscipit quas eos!</p>
                </div>

            </section>

            <div class="speaker">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic 
                possimus quaerat impedit temporibus in. Ab, provident totam corporis culpa
                repellendus quisquam, error excepturi, fugit architecto saep
                e optio tempora eveniet corrupti?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto obcaecati 
                voluptatum cumque hic eligendi 
                facere, tenetur ipsum eius maior Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam voluptatem modi omnis doloribus illum 
                fugit autem assumenda aliquid nemo voluptatum cum 
                aspernatur sint sapiente dolores, ipsa, veniam dolor soluta.
                es sint expedita. Tenetur maiores nulla soluta mollitia molestiae saepe consectetur!
            </div>

        </div>

        <?php include_once($ep_project_root . '/templates/layouts/footer.php'); ?>

    </body>
</html>