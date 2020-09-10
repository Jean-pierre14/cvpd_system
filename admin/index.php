<?php include("../config/index.php");?>
<?php include("./lock.php");?>
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
                            <span class="count-personnelle">
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
                            <span class="count-female">
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
                            <span class="count-male">
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
                            <span class="count-request">
                                10
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 bg-image1" style="min-height: 80vh;">
        <div class="container bg-light-op py-5 mt-5" style="height: 100vh;">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <img src="../public/images/goma.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 bg-warning col-sm-12">
                    <div class="text-white">
                        <h5 class="text-center py-5">
                            <i>"</i>
                            Seul les morts voient la fin de la guerre Aristote
                            <i>"</i>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 bg-white text-center">
                    <h1 class="display-4"><?php print $project;?></h1>
                    <p class="text-bold text-italic"><?php print $abbreviation; ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/dist/Chart.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            countPersonnelle();
            countMale();
            countFemale();
            countRequest();
        });
        function countPersonnelle(){
            let action = 'count-personnelle';
            $.ajax({
                url: '../config/event.php',
                method: 'post',
                data: {action},
                success: function(data){
                    $('.count-personnelle').html(data)
                }
            })
        } 
        function countMale(){
            let action = 'count-male';
            $.ajax({
                url: '../config/event.php',
                method: 'post',
                data: {action},
                success: function(data){
                    $('.count-male').html(data)
                }
            })
        } 
        function countFemale(){
            let action = 'count-female';
            $.ajax({
                url: '../config/event.php',
                method: 'post',
                data: {action},
                success: function(data){
                    $('.count-female').html(data)
                }
            })
        } 
        function countRequest(){
            let action = 'count-request';
            $.ajax({
                url: '../config/event.php',
                method: 'post',
                data: {action},
                success: function(data){
                    $('.count-request').html(data)
                }
            })
        }
    </script>
    </body>
</html>
    
