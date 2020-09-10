<?php require_once("./includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVPD</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron m-0">
        <div class="container">
            <h3 class="display-5">CVPD</h3>
            <h4 class="display-4"><?php print $abbreviation;?></h4>
        </div>
    </div>
    <div class="container-fluid m-0">
        <div class="container">
            <h3 class="text-center">Bienvenu <?php print $row['username'];?></h3>
            <h3 class="text-center">Nous somme le <?php print $date;?></h3>
        </div>
    </div>
    <div class="container-fluid m-0">
        <div class="container">
            <?php
                switch($row['post']){
                    case 'Directeur':
                        include('./includes/logistique.php');
                    break;
                    case 'logisticien':
                        include('./includes/logistique.php');
                    break;
                    case 'Comptable':
                        include('./includes/comptabilite.php');
                    break;
                    case 'Coordon':
                        include('./includes/coordon.php');
                    break;
                    case 'Receptioniste':
                        include('./includes/reception.php');
                    break;
                    case 'Informaticien':
                        include('./includes/reception.php');
                    break;
                    default:
                        include('./includes/home.php'); 
                }                
            ?>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            Tasks()
        });
        function Tasks(){
            let action = 'Tasks';
            let username = $('#Username').val()
            $.ajax({
                url: './includes/config.php',
                method: 'post',
                data: {action, username},
                success: function(data){
                    $('.Tasks').html(data)
                }
            })
        }
    </script>
</body>
</html>