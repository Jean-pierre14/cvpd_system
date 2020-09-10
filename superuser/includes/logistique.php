<nav class="navbar py-0 navbar-expand-md bg-info navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="#" id="Username"><?php print $project.'/'. $row['post'];?></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Nouveau tache</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./loggout.php">Se deconnecter</a>
      </li>
    </ul>
  </div>
</nav>
<div class="row py-5">
    <div class="col-md-7 col-sm-12">
        <h3 class="text-center text-uppercase">Les donnees</h3>
        <div class="Info">
            <!-- Info -->
        </div>

        <div class="Tasks">
            <!-- API -->
        </div>
    </div>
    <div class="col-md-5 col-sm-12">
        <div class="card card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" placeholder="Titre du rapport" class="form-control" value="<?php print $title;?>">
                </div>
                <div class="form-group">
                    <label for="about">Description</label>
                    <textarea name="about" id="about" rows="5" placeholder="Description..." class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="customFile">Selection le fichie</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="Logisticien-journale" class="btn btn-block btn-info">Execute</button>
                </div>
            </form>
        </div>
        <div class="card card-body mt-3">
            <?php 
                include('../config/event.php');
                include('../includes/message.php');
            ?>
            <h2 class="text-center">Tache du jour</h2>
            <form action="" method="post" class="form-inline col-md-12 m-0 p-0">
                <input type="hidden" name="username" class="form-control" value="<?php print $row['username'];?>">
                <input type="text" name="task" id="task" placeholder="Tape quelque chose" class="form-control">
                <button class="btn btn-md btn-info" name="TaskExe">Execute</button>
            </form>
        </div>
    </div>
</div>