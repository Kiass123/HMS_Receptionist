<?php 
    session_start();
    require_once('../models/users.php');
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username != null && $password != null)
            {
            
            $status=loginCheck($username,$password);
            if($status)
            {
                $_SESSION['status'] = true;
                $_SESSION['current_user'] = getUser($username);
                setcookie('status',$_SESSION['current_user']['username'], time()+2000, '/');
                header('location: ../views/UserDashboard.php');
            }
            else{
                echo "INCORRECT!Check your username or password again";
            }

        }
        else{
            echo "Please fill up all the informations";
        }
    }
    
?>