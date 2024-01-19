<?php 
    session_start();
    require_once('../models/notificationDb.php');

    if(isset($_POST['submit'])){

        $receiver= $_POST['receiver'];
        $message = $_POST['message'];
       

        if($receiver=='patient'){
                $a=['receiver'=>$receiver,'message'=>$message ];
                
                add($a);
                add_n($a);
               
               header('location: ../views/display_n.php');
               echo "Saved in Patient's database!";
          
        }
        
    

       else{
            $a=['receiver'=>$receiver,'message'=>$message ];
            
            add_d($a);
            add_n($a);
            echo "Saved in doctor's database!!";
           
            header('location: ../views/display_n.php');
           
      
           }
        

    }

    else{
        echo "Invalid";
    }
    ?>

    