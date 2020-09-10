<?php include("./includes/header.php");?>

    <div class="container-fluid bg-info" style="min-height: 100vh;">
        <div class="container">
            <h3 class="text-center display-4 text-white">Bienvenu chez nous</h3>
            <p class="text-center text-white">Nous <?php print $abbreviation;?></p>
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <img src="./public/images/ViolencesGoma1.jpg" alt="Goma image" class="img-fluid">
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="card card-body">
                        <h3 class="text-center">Notre Address</h3>
                        <p>
                            Nous somme a Goma dans la commune de Goma avenu Himbi 2 avenu .... numero....,
                            derrier L'ancien hotel Lusangi a cote l'ONEM
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center text-white">
                <h1 class="display-4"><?php print $abbreviation;?></h1>
            </div> 
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
                                <button name="log" class="btn btn-sm btn-warning btn-block">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="card my-3">
                    <div class="card-body p-2">
                        <p class="text-center p-0">Cree un <a href="register.php">compte</a></p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <div class="pt-5">
                        <h3 class="text-center">Notre mission</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi accusantium non, minus nulla ipsa itaque asperiores perferendis odio beatae iste obcaecati pariatur suscipit placeat sunt debitis laboriosam dolorum rerum dolore!
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./public/images/police-affronte-manifestants-Goma-28-decembre-2018-RDC_0_728_486.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 col-sm-12">
                    <img src="./public/images/deplacesnordkivu.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="text-center">Object</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste rerum aliquam autem facere vitae repellat culpa aperiam iusto? Provident quos et dicta aut aspernatur quia? Sed delectus repellendus ipsa dolorem!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quae cumque nam modi, atque, repellat iure laudantium doloribus, inventore natus beatae maxime et? Vel, minus, consequuntur voluptates ipsa ex explicabo consequatur laudantium cum rerum possimus error accusantium veritatis, unde ipsum fugit neque quos. Consequuntur blanditiis, delectus veniam itaque alias incidunt.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row py-5 justify-content-center">
                <div class="col-md-4 col-sm-12 p-1">
                    <div class="card">
                        <div class="card-body">
                            <h3>Contact nous</h3>
                            <form action="" method="post">
                                <p id="messageError" class="text-danger display-5"></p>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email@example.cvpd">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Votre message" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger" type="button" id="envoie">Envoie</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#envoie').click(function(){

                let email = $('#email').val();
                let message = $('#message').val();
                let action = 'request';

                if(email === '' || email === undefined || message === '' || message === undefined || message.length < 3){
                    $('#messageError').text('Remplissez tout le champs')
                }else{
                    $.ajax({
                        url: './config/event.php',
                        method: 'post',
                        data: {action, email, message},
                        success: function(data){
                            if(data = "VOTRE REQUEST A ETAIT ENVOIE AVEX SUCCES"){
                                alert(data)
                                $('#email').val('');
                                $('#message').val('');
                            }
                        }
                    })
                }
            })
        });
    </script>
</body>
</html>