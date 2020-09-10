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
    

    <div class="container-fluid p-0">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-7 col-sm-12">
                    <div class="card card-body">
                        <form id="export_excel" action="" method="post">
                            <div class="form-group">
                                <label for="excelfile">Selection le fichie Excel</label>
                                <input type="file" name="excel_file" id="excel_file" class="form-control">
                            </div>
                        </form>
                    </div>
                    <?php if(isset($_GET['select'])): ?>
                        <?php $table = $_GET['select'];?>
                        <input type="hidden" id="table" value="<?php print $table;?>" class="form-control">
                        <h2 class="text-center"><span class="text-info">SELECT * FROM </span><?php print $table;?><span class="text-info">;</span></h2>
                        <div id="getTable">
                            <!-- APIs -->
                        </div>
                    <?php  else: ?>
                        <div id="result">
                            <!-- Api -->
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="card card-body">
                        <h2 class="display-5">comment ca marche?</h2>
                        
                        <p class="p-0 m-0">
                        <b>1.</b> Vous commence par cree votre table dans notre base des donnees avec les colones, selon le colonne de votre choix par rapport a votre besoin
                        </p>
                        <p class="p-0 m-0">
                        <b>2.</b> Vous telecharge le fichie dans ce champs propos la dessous
                        </p>
                    </div>
                    <div class="mt-4 card card-body">
                        <div id="tables">
                            <!-- APIs -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/dist/Chart.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#excel_file').change( function(){
                $('#export_excel').submit();
            });
            $('#export_excel').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url: 'export.php',
                    method: 'post',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data){
                        $('#result').html(data);
                        $('#excel_file').val('');
                    }
                })
            });
            tables();
            getTable();
            countPersonnelle();
            countMale();
            countFemale();
            countRequest();
        });
        function tables(){
            let action = 'tables';
            
            $.ajax({
                url: "../config/event.php",
                method: 'post',
                data: {action},
                success: function(data){
                    $('#tables').html(data)
                }
            })
        }
        function getTable(){
            let action = 'getTable';
            let table = $('#table').val()
            $.ajax({
                url: '../config/event.php',
                method: 'post',
                data: {action, table},
                success: function(data){
                    $('#getTable').html(data)
                }
            })
        } 
    </script>
    </body>
</html>
    
