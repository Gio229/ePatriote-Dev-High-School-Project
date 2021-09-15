<button class="openbtn" onclick="openNav()">&#9776;</button>

    <div id="dash" class="dash-nav">
        <button href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</button>
        <div class="nav-row">
            <a href="/">Accueil</a>
        </div>
        <div class="nav-row">
            <a href="/logout">Se déconnecter</a>
        </div>
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
        <div class="nav-row">
            <a href="#">option 1</a>
        </div>
        <div class="nav-row">
            <a href="#">option 2</a>
        </div>
    </div>

    <h1 class=""><?= $_["user"]["name"] ?></h1>