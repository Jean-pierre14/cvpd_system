<?php include("../config/index.php");?>
<!DOCTYPE html>
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
    <div class="container-fluid m-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-12 p-2">
                    <div class="box shadow">
                        <p class="d-flex justify-content-between">
                            <span>
                                <b>Personnelles</b>
                            </span>
                            <span>
                                10
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 p-2">
                    <div class="box shadow">
                        <p class="d-flex justify-content-between">
                            <span>
                                <b>Femmes</b>
                            </span>
                            <span>
                                10
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 p-2">
                    <div class="box shadow">
                        <p class="d-flex justify-content-between">
                            <span>
                                <b>Hommes</b>
                            </span>
                            <span>
                                20
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 p-2">
                    <div class="box shadow">
                        <p class="d-flex justify-content-between">
                            <span>
                                <b>Requeste</b>
                            </span>
                            <span>
                                10
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 bg-image1">
        <div class="container bg-light-op">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <h1 class="display-1">Image</h1>
                </div>
                <div class="col-md-7 col-sm-12">
                    <h1 class="display-1">Image Vector</h1>
                </div>
                <div class="col-md-12 col-sm-12 text-center">
                    <h1 class="display-4"><?php print $project;?></h1>
                    <p class="text-bold text-italic"><?php print $abbreviation; ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/dist/Chart.bundle.min.js"></script>
    </body>
</html>
    
