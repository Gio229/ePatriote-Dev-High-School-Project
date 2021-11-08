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
    <?php if(isCensor()): ?>

    <?php include_once($ep_project_root . '/templates/layouts/myMenu.php'); ?>
    <?php include_once($ep_project_root . '/templates/layouts/userNav.php'); ?>    
      
    <div id="contenu">


        <section class="program section">
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/exams.svg" alt="1">
                </div>

                <p>Programmer un cours ou un devoir</p>
                <?= $_['form_progExam'] ?>
                
            </div>
        </section>

        <!--<section class="program section">
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/censor.svg" alt="1">
                </div>

                
                <div>-->
                    <!--<button class="openNote" onclick="openNote()">Gérer les professeurs</button>-->
        
                    <!--<div id="note" class="note">
                        <button href="javascript:void(0)" class="closeNote" onclick="closeNote()">&times;</button>
                        
                        <form action="" method="POST">

                            <p>Accordez des droits de professeur à un utilisateur</p><br>
                            <table>
                                <tr><td><label for="userName">Nom utilisateur:</label></td><td><input type="text" id="userName" name="userName" required></td></tr>
                                <tr><td><label for="userName">Email utilisateur:</label></td><td><input type="email" id="mail" name="mail" required></td></tr>
                                <tr><td><label for="classe">Classe:</label></td><td><input type="text" id="classe" name="classe" required></td></tr>
                                <tr><td><label for="course">Matière:</label></td><td><input type="text" id="course" name="course" required></td></tr>
                                <tr><td><label for="pass">Votre mot de passe:</label></td><td><input id="pass" type="password" name="pass" required></td></tr>
                            </table>
                            <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
            
                        </form>
                    </div>
                </div>
                <div>-->
                    <!--<button class="openNote" onclick="openManagParents()">Gérer les parents d'élève</button>-->
        
                    <!--<div id="manag-parents" class="note">
                        <button href="javascript:void(0)" class="closeNote" onclick="closeManagParents()">&times;</button>
                        
                        <form action="" method="POST">

                            <p>Accordez des droits de parent à un utilisateur</p><br>
                            <table>
                                <tr><td><label for="userName">Nom utilisateur:</label></td><td><input type="text" id="userName" name="userName" required></td></tr>
                                <tr><td><label for="userName">Email utilisateur:</label></td><td><input type="email" id="mail" name="mail" required></td></tr>
                                <tr><td><label for="matricule">Matricule élève:</label></td><td><input type="text" id="matricule" name="matricule" required></td></tr>
                                <tr><td><label for="pass">Votre mot de passe:</label></td><td><input id="pass" type="password" name="pass" required></td></tr>
                            </table>
                            <input class="envoie" type="submit" value="Appliquer" onClick="return confirm('Voulez-vous appliquer ?')">
            
                        </form>
                    </div>
                </div>
                
        </section> -->
        <section class="program section">
            <h2>[Publier les résultats]</h2>
            <div class="container-program">

                <div class="illustration-program">
                    <img class="illustration-img-program" src="<?= $ep_base_dir ?>/img/bulletins.svg" alt="1">
                </div>
                <h3>(Rien pour le moment)</h3>
            </div>
        </section> 
                
    
    <?php else: ?>
        <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    <?php endif ?>
</body>
<script src="<?= $ep_base_dir ?>/js/usersInterface.js"></script>

<!-- send data with javascript -->
<script>
    var elements = document.querySelectorAll('.data');
    elements.forEach((e)=>{

        e.value = '';

    });
    document.getElementById("progexamform").onsubmit = (e)=>{

        var data = '';
        elements.forEach((e)=>{

            data += e.getAttribute('name') + '=' + e.value + '&';
            
        });

        e.preventDefault();
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = ()=>{
            if(xhr.readyState == 4 && xhr.status == 200){
                console.log(data);
            }else if(xhr.readyState == 4){
                alert('Une erreur est survenue...');
            }
        };


        xhr.open("POST", "/administration/censor", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send(data);


        elements.forEach((e)=>{

            e.value = '';

        });//console.log('ok')

        return true;
    }
</script>
</html>
