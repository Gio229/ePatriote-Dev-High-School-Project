<nav>

    <?php if(isCensor()): ?>
        <div class="navigation"><a class="navLink" href="/administration/censor">Home</a></div>
        <div class="navigation"><a class="navLink" href="/administration/censor_management/teacher">Gérer les professeurs</a></div>
        <div class="navigation"><a class="navLink" href="/administration/censor_management/parent">Gérer les parents</a></div>
        <div class="navigation"><a class="navLink" href="/administration/censor_management/student">Gérer les élèves</a></div>
    <?php endif ?>

    <?php if(isStudent()): ?>
        <div class="navigation"><a class="navLink" href="/student/me">Home</a></div>
        <div class="navigation"><a class="navLink" href="/student/me/myresults">Mes resultats</a></div>
    <?php endif ?>

    <?php if(isTeacher()): ?>
        <div class="navigation"><a class="navLink" href="/teacher/me">Home</a></div>
        <div class="navigation"><a class="navLink" href="/teacher/me">Noter mes élèves</a></div>
    <?php endif ?>

    <?php if(isParent()): ?>
        <div class="navigation"><a class="navLink" href="/parent/me">Home</a></div>
    <?php endif ?>

    <?php if(isAdmin()): ?>
        <div class="navigation"><a class="navLink" href="/administration/InformaticService">Home</a></div>
        <div class="navigation"><a class="navLink" href="/administration/InformaticService_management/censor">Gérer les censeurs</a></div>
        <div class="navigation"><a class="navLink" href="/administration/InformaticService_management/add_data">[Ajout base de donnée école]</a></div>

    <?php endif ?>

    <div class="navigation"><a class="navLink" href="/logout">Se déconnecter</a></div>
    

</nav>