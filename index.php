<?php include("./config/index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $project; ?></title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>
<body>
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
            </div>
        </div>
    </div>
</body>
</html>