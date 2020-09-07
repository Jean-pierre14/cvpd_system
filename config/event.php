
<?php
    require_once("../config/index.php");
    include("../includes/header.php");
    $con = mysqli_connect("localhost", "root", "", "cvpd_db") OR die("Cannot be connect to this DB");
    $output = '';
    $errors = [];
    $success = [];

    $username = '';
    $name = '';
    $email = '';
    $address = '';
    $phone = '';


    if(isset($_POST['register'])){
        $rand = rand(1, 2);
        
        $username = mysqli_real_escape_string($con, trim($_POST['username']));
        $name = mysqli_real_escape_string($con, trim($_POST['name']));
        $email = mysqli_real_escape_string($con, trim($_POST['email']));
        $address = mysqli_real_escape_string($con, trim($_POST['address']));
        $phone = mysqli_real_escape_string($con, trim($_POST['phone']));
        $sexe = mysqli_real_escape_string($con, trim($_POST['sexe']));
        $post = mysqli_real_escape_string($con, trim($_POST['post']));
        $start = mysqli_real_escape_string($con, trim($_POST['start']));

        if(empty($username)){
            array_push($errors, "Le nom d'utilisateur est vide");
        }
        if(empty($name)){
            array_push($errors, "Votre champs de nom est vide");
        }
        if(empty($email)){
            array_push($errors, "Votre champs d'email est vide");
        }
        if(empty($address)){
            array_push($errors, "Votre champs d'address est vide");
        }
        if(empty($phone)){
            array_push($errors, "Numero de telephone!!!");
        }
        if(empty($sexe)){
            array_push($errors, "Le sexe est vide");
        }
        if(empty($post)){
            array_push($errors, "Le poste est vide");
        }

        if(empty($start)){
            array_push($errors, "Debut de service est vide");
        }
        $check = mysqli_query($con, "SELECT * FROM `user_account`");
        $row = mysqli_fetch_assoc($check);

        if($row['username'] == $username){array_push($errors, "C'est d'utilisateur est deja utilise");}
        if($row['email'] == $email){array_push($errors, "Cette address email existe deja");}
        if($row['name'] == $name){array_push($errors, "Ce nom est deja utilise");}
        if($row['phone'] == $phone){array_push($errors, "Ce numero de telephone est deja utilise");}

        if(count($errors) == 0){
            $pass = 1234;
            $password = md5($pass);

            if($rand == 1){
                $profile_pic = "../public/images/GitHub.png";
            } else if($rand == 2){
                $profile_pic = "../public/images/Twitter.png";
            }

            $sql = mysqli_query($con, "INSERT INTO user_account(`username`, `name`, `email`, `address`, `phone`, `sexe`, `post`, `pass`, `start`, `profile_pic`) VALUE('$username','$name','$email','$address','$phone', '$sexe', '$post', '$password', '$start', '$profile_pic')");

            if($sql){
                array_push($success, "Account created");
                $username = '';
                $name = '';
                $email = '';
                $address = '';
                $phone = '';
                $post = '';
                $sexe = '';
                $start = '';
            }else{
                array_push($errors, "error");
            }
        }
    }
    if(isset($_POST['update-user'])){
        $id = mysqli_real_escape_string($con, trim($_POST['upid']));
        $username = mysqli_real_escape_string($con, trim($_POST['upusername']));
        $name = mysqli_real_escape_string($con, trim($_POST['upname']));
        $email = mysqli_real_escape_string($con, trim($_POST['upemail']));
        $address = mysqli_real_escape_string($con, trim($_POST['upaddress']));
        $phone = mysqli_real_escape_string($con, trim($_POST['upphone']));
        $sexe = mysqli_real_escape_string($con, trim($_POST['upsexe']));
        $post = mysqli_real_escape_string($con, trim($_POST['uppost']));
        $start = mysqli_real_escape_string($con, trim($_POST['upstart']));

        if(empty($username)){
            array_push($errors, "Le nom d'utilisateur est vide");
        }
        if(empty($name)){
            array_push($errors, "Votre champs de nom est vide");
        }
        if(empty($email)){
            array_push($errors, "Votre champs d'email est vide");
        }
        if(empty($address)){
            array_push($errors, "Votre champs d'address est vide");
        }
        if(empty($phone)){
            array_push($errors, "Numero de telephone!!!");
        }
        if(empty($sexe)){
            array_push($errors, "Le sexe est vide");
        }
        if(empty($post)){
            array_push($errors, "Le poste est vide");
        }

        if(empty($start)){
            array_push($errors, "Debut de service est vide");
        }
        $check = mysqli_query($con, "SELECT * FROM `user_account` WHERE id != '$id'");
        $row = mysqli_fetch_assoc($check);

        if($row['username'] == $username){array_push($errors, "C'est d'utilisateur est deja utilise");}
        if($row['email'] == $email){array_push($errors, "Cette address email existe deja");}
        if($row['name'] == $name){array_push($errors, "Ce nom est deja utilise");}
        if($row['phone'] == $phone){array_push($errors, "Ce numero de telephone est deja utilise");}

        if(count($errors) > 0){
            $output .= '
            <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4 p-1">
            ';
            foreach($errors AS $error){
                $output .= '
                
                    <div class="alert alert-warning alert-dismissible fade show">
                            '.$error.'
                        <a href="../admin/personnelle.php?edit='.$id.'" aria-label="Close" class="close btn border-0">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>  
                ';
            }
            $output .= '
                    </div>
                </div>
            </div>
            ';
        }else{
            $sql = mysqli_query($con, "UPDATE user_account SET `username`='$username', `name`= '$name', `email`='$email', `address`='$address', `phone`='$phone', `sexe`='$sexe', `post`='$post', `start`='$start' WHERE id ='$id'");
            if($sql){
                $output .= '
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-3 p-1">
                            <div class="alert alert-success alert-dismissible fade show">
                                    Updated
                                <a href="../admin/personnelle.php?edit='.$id.'" aria-label="Close" class="close btn border-0">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
            ';
            }else{
                $output .= '
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-3 p-1">
                            <div class="alert alert-danger alert-dismissible fade show">
                                    Erreur
                                <a href="../admin/personnelle.php?edit='.$id.'" aria-label="Close" class="close btn border-0">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
            ';
            }
            
        }
        print $output;
    }
    if(isset($_POST['login'])){

        $username = htmlentities(mysqli_real_escape_string($con, trim($_POST['username'])));
        $pass = htmlentities(mysqli_real_escape_string($con, trim($_POST['password'])));
    
        if(empty($username)){array_push($errors, "Compte est vide");}
        if(empty($pass)){array_push($errors, "Mot de pass est vide");}
    
        if(count($errors) == 0){
            $sql = mysqli_query($con, "SELECT * FROM `user_account` WHERE username = '$username' AND `pass` = '$pass'");
            if(@mysqli_num_rows($sql) == 1){
                session_start();
                $_SESSION = @mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $_SESSION['Admin'] = (int)$_SESSION['Admin'];
                
                $url = ($_SESSION['Admin'] === 1) ? 'index.php' : './Users/';
    
                header("Location: ". $url);
                exit();
    
                mysqli_free_result($sql);
                mysqli_close($con);
            }else{
                array_push($errors, "Compte ou mot de pass invalide");
            }
        }
    }

    // APIs
    if(isset($_POST['action'])){
        if($_POST['action'] == 'users'){
            $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC");
            if(mysqli_num_rows($sql) > 0){
                $count = mysqli_num_rows($sql);
                $output .= '
                    <div class="table-responsive" style="font-size: 12px">
                    <table class="table table-sm table-info table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Post</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                while($row = mysqli_fetch_assoc($sql)){
                    $output .= '
                        <tr class="">
                            <td class="">'. $row['name'] .'</td>
                            <td class="">'. $row['post'] .'</td>
                            <td class="">'. $row['email'] .'</td>
                            <td class="">
                                <div class="btn-group delete">
                                    <a href="./personnelle.php?edit='. $row['id'] .'" class="btn btn-sm btn-info">Edit</a>
                                    <a href="./personnelle.php?efface='. $row['id'] .'" class="btn btn-sm btn-danger">Efface</a>
                                </div>
                            </td>
                        </tr>
                    ';
                }
                $output .= '
                        </tbody>
                    </table>
                </div>
                    <p class="d-flex bg-warning p-2 justify-content-between align-items-center">
                        <span class="">
                            <b class="">Total</b>
                        </span>
                        <span class="badge badge-sm badge-info">
                            '. $count .'
                        </span>
                    </p>
                ';
            }else{
                $output .= '<p class="alert alert-warning">Vous n\'avez aucune personne dans votre base des donnees</p>';
            }
            print $output;
        }
        if($_POST['action'] == 'getUser'){
            $id = $_POST['id'];

            $sql = mysqli_query($con, "SELECT * FROM user_account WHERE id='$id'");

            if(mysqli_num_rows($sql) > 0){
                while($row = mysqli_fetch_assoc($sql)){
                    $output .= '
                    <div class="card card-body">
                    <h2 class="text-info">'.$row['username'].'</h2>
                    <form action="../config/event.php" method="post">
                        <?php require_once("../config/event.php");?>
                        <?php require_once("../includes/message.php");?>
                        <div class="form-row">
                            <input type="hidden" name="upid" id="upid" value="'.$row['id'].'" class="form-control">
                            <div class="form-group col-md-5 col-sm-12">
                                <label for="upusername">Nom d\'utilisateur</label>
                                <input type="text" value="'.$row['username'].'" name="upusername" id="upusername" placeholder="Nom d\'utilisateur" class="form-control">
                            </div>
                            <div class="form-group col-md-7 col-sm-12">
                                <label for="name">Nom complet</label>
                                <input type="text" value="'.$row['name'].'" name="upname" id="upname" placeholder="Example: Arnold DJUMA" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="upemail">Email</label>
                                <input type="email" value="'.$row['email'].'" name="upemail" id="upemail" placeholder="example@cvpd.cd" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="address">Address</label>
                                <input type="text" value="'.$row['address'].'" name="upaddress" id="upaddress" placeholder="Votre address" class="form-control">
                            </div>
                            <div class="form-group col-md-7 col-sm-12">
                                <label for="upphone">Telephone</label>
                                <input type="tel" value="'.$row['phone'].'" name="upphone" id="upphone" placeholder="+243976353543" class="form-control">
                            </div>
                            <div class="form-group col-md-5 col-sm-12">
                                <label for="upsexe">Sexe 
                                    <span class="badge badge-sm badge-warning">'.$row['sexe'].'</span>
                                </label>
                                <select name="upsexe" id="upsexe" class="form-control">
                                    <option disabled>~~ selection ~~</option>
                                    <option value="M">Masculin</option>
                                    <option value="F">Feminin</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5 col-sm-12">
                                <label for="uppost">Post
                                <span class="badge badge-sm badge-warning">'.$row['sexe'].'</span>
                                </label>
                                <select name="uppost" id="uppost" class="form-control">
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
                                <label for="upstart">Debut de service</label>
                                <input type="date" value="'.$row['start'].'" name="upstart" id="upstart" class="form-control">
                            </div>
                        </div>
                        <div class="form-group btn-group">
                            <button type="submit" name="update-user" class="btn btn-warning">Mettre a jour</button>
                            <a href="personnelle.php" class="btn btn-info">Ajouter personnelle</a>
                        </div>
                    </form>
                    </div>
                    ';
                }
            }else{
                $output .= '<p class="alert alert-danger">thank to try</p>';
            }
            print $output;
        }

        // Show tables
        if($_POST['action'] == 'tables'){
            $sql = mysqli_query($con, "SHOW TABLES");
            if(mysqli_num_rows($sql) > 0){
                $output .= '
                    <div class="list-group list-group-flush">
                ';
                while($row = mysqli_fetch_assoc($sql)){
                    $output .= '
                        <a href="systeme.php?select='.$row['Tables_in_cvpd_db'].'" class="list-group-item list-group-item-action">
                            '.$row['Tables_in_cvpd_db'].'
                        </a>
                    ';
                }
            }else{
                $output .= '<p class="alert alert-danger">Vous n\'avez rien dans votre database</p>';
            }
            print $output;
        }

        // Select table
        if($_POST['action'] == 'getTable'){
            $table = mysqli_real_escape_string($con, trim($_POST['tablw']));

            $sql = mysqli_query($con, "SELECT * FROM '$table'");
            if($sql){

            }else{
                $output .= '<p class="alert alert-danger">Il y a un probleme</p>';
            }
        }
    }

    