<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "cvpd_db") OR die("Cannot be connect to this DB");
    
    $output = '';
    $project = "CVPD";
    $abbreviation = "Coalition des Volontaires pour la Paix et le Developpement";
    $date = date('d/'.'m/'.'Y');

    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)) {
        header('location: ../index.php');
        exit();
    }
    $id = $_SESSION['id'];
    $SQL = mysqli_query($con, "SELECT * FROM user_account WHERE id = '$id'");
    $row = mysqli_fetch_assoc($SQL);
    $title= '';

    // Events
    if(isset($_POST['action'])){
        if($_POST['action'] == 'Tasks'){
            $username = $_POST['username'];
            $sql = mysqli_query($con, "SELECT * FROM `Task_tbl` WHERE Created_at=now()");
            if($sql){
                $count = mysqli_num_rows($sql);
                if($count > 0){
                    $output .= '<ul class="list-group">';
                    while($row = mysqli_fetch_assoc($sql)){
                        $output .= '<li class="list-group-item">'.$row['TaskName'].'</li>';
                    }
                    $output .= '</ul>';
                }else{
                    $output .= '
                    <p class="alert alert-warning">Vous n\'avez rien dans vos tache du jour</p>
                    ';
                }
            }else{
                $output .= '
                <p class="alert alert-warning">Vous avez un probleme dans votre systeme</p>
                ';
            }
            print $output;
        }
    }