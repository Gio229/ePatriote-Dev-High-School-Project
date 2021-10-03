<button class="openbtn" onclick="openNav()">&#9776;</button>

    <div id="dash" class="dash-nav">
        <button href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</button>
        <div class="nav-row">
            <a href="/">Accueil</a>
        </div>
        <div class="nav-row">
            <a href="/logout">Se déconnecter</a>
        </div>
        
        <?php if(isCensor()): ?>
        <div class="nav-row">
            <a href="#"class="openNote" onclick="openManagParents()">Gérer les parents d'élève</a>
        </div>
        <div class="nav-row">
            <a href="#"class="openNote" onclick="openNote()">Gérer les professeurs</a>
        </div>
        <?php endif ?>
        <?php if(isTeacher()): ?>
        <div class="nav-row">
            <a href="#"class="openNote" onclick="openNote()">Notez mes élèves</a>
        </div>
        <?php endif ?>
        <div class="nav-row">
            <a href="#">Paramètres</a>
            <div class="nav-row drop-son">
                <a href="#">1</a>
            </div>
            <div class="nav-row drop-son">
                <a href="#">2</a>
            </div>
            <div class="nav-row drop-son">
                <a href="#">3</a>
            </div>
        </div>
    </div>

    <div class="tt">
        <h1><?= $_["user"]["name"] ?></h1>
    </div>
    