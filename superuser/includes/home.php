<nav class="navbar navbar-expand-md bg-dark navbar-dark py-0">
    <a class="navbar-brand" href="#"><?php print $project;?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Accueil</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Personnelles</a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Systeme</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="./loggout.php">Se deconnecter</a>
            </li>
        </ul>
    </div>
</nav>
<div class="row py-5">
    <div class="col-md-6 col-sm-12">
        <div class="card card-body">
            <h3 class="text-center display-5"><?php print $project;?></h3>
            <h5 class="text-center text-uppercase"><?php print $abbreviation;?></h5>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <h3></h3>
    </div>
</div>