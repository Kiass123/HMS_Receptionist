<?php 
    session_start();
    require_once('../models/helpDb.php');

    if(isset($_POST['submit'])){

        $choice= $_POST['choice'];
        $question= $_POST['question'];
       

        
                $a=['choice'=>$choice,'question'=>$question ];
                
                add($a);
                header('location: ../views/UserDashboard.php');
    }
    else{
        echo "Invalid";
    }
    ?>

    