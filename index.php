<?php include("./includes/header.php");?>

    <div class="container-fluid bg-info" style="min-height: 100vh;">
        <h3 class="text-center display-4 text-white">Bienvenu chez nous</h3>
        <p class="text-center text-white">Nous <?php print $abbreviation;?></p>
        <div class="text-center text-white">
            <h1 class="display-2"><?php print $abbreviation;?></h1>
        </div> 
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <?php require_once("./config/event.php");?>
                        <?php require_once("./includes/message.php");?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Password *****" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sm btn-warning btn-block">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body p-2">
                        <p class="text-center p-0">Cree un <a href="register.php">compte</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>