<?php include("../config/index.php");?>
<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $project; ?></title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <?php include("./nav.php");?>
    
    <div class="containe-fluid p-0">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header p-1">
                            <h2 class="text-info">Personnnelle</h2>
                        </div>
                        <div class="card-body">
                            <div class="User">
                                <!-- API -->
                            </div>                                
                        </div>
                    </div>
                </div>
                <?php if(isset($_GET['edit'])):?>
                    <div class="col-md-6 col-sm-12">
                        <input type="hidden" name="getUser" id="GetMe" class="form-control" value="<?php print $_GET['edit'];?>">
                        <div id="getUser">
                            <!-- API -->
                        </div>
                    </div>
                <?php else:?>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-body">
                            <h2 class="text-info">Ajoute personnelle</h2>
                            <form action="" method="post">
                                <?php require_once("../config/event.php");?>
                                <?php require_once("../includes/message.php");?>
                                <div class="form-row">
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="username">Nom d'utilisateur</label>
                                        <input type="text" value="<?php print $username;?>" name="username" id="username" placeholder="Nom d'utilisateur" class="form-control">
                                    </div>
                                    <div class="form-group col-md-7 col-sm-12">
                                        <label for="name">Nom complet</label>
                                        <input type="text" value="<?php print $name;?>" name="name" id="name" placeholder="Example: Arnold DJUMA" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="email">Email</label>
                                        <input type="email" value="<?php print $email;?>" name="email" id="email" placeholder="example@cvpd.cd" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="address">Address</label>
                                        <input type="text" value="<?php print $address;?>" name="address" id="address" placeholder="Votre address" class="form-control">
                                    </div>
                                    <div class="form-group col-md-7 col-sm-12">
                                        <label for="phone">Telephone</label>
                                        <input type="tel" value="<?php print $phone;?>" name="phone" id="phone" placeholder="+243976353543" class="form-control">
                                    </div>
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="sexe">Sexe</label>
                                        <select name="sexe" id="sexe" class="form-control">
                                            <option disabled>~~ selection ~~</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="post">Post</label>
                                        <select name="post" id="post" class="form-control">
                                            <option disabled>~~ selection ~~</option>
                                            <option value="Directeur">Directeur</option>
                                            <option value="Coordon">Coordon</option>
                                            <option value="Comptable">Comptable</option>
                                            <option value="Logisticien">Logisticien</option>
                                            <option value="Informaticien">Informaticien</option>
                                            <option value="Receptioniste">Receptionniste</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="start">Debut de service</label>
                                        <input type="date" value="<?php print $start;?>" name="start" id="start" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="register" class="btn btn-info">Enregistrement</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>

    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/dist/Chart.bundle.min.js"></script>
    <script src="../public/js/main.js"></script>
    </body>
</html>
    
