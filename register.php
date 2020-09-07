<?php include("./includes/header.php");?>
<div class="container-fluid p-0 m-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <h3 class="text-center">Enregistrement</h3>
                <div class="card">
                    <div class="card-body">

                        <?php require_once("./config/event.php");?>
                        <?php require_once("./includes/message.php");?>
                        <form action="" method="post">
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
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="phone">Telephone</label>
                                    <input type="tel" value="<?php print $phone;?>" name="phone" id="phone" placeholder="+243976353543" class="form-control">
                                </div>
                                <!-- <div class="form-group col-md-5 col-sm-12">
                                    <label for="customFile">Photo profile</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-info">Enregistrement</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("./includes/footer.php");?>