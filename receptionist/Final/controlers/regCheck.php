<?php 
    session_start();
    require_once('../models/users.php');

    if(isset($_POST['Rsubmit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conPass = $_POST['confirmPass'];
        if (empty($_POST['gender'])) {
            echo "Gender is not selected.". "<br>";
            $gender=null;
        }else{
            $gender = $_POST['gender'];
        }

        $date = $_POST['dob'];

        if($name != null && $email != null && $username != null && $password != null && $conPass != null && $date != null && $gender !=null){
            if ($password == $conPass)
             {
                $user=['name'=>$name,'email'=>$email,'username'=>$username,'password'=>$password,'gender'=>$gender,'dob'=>$date];
                $status=addUser($user);
                if($status)
                {
                    header('location: ../views/rlogin.html');
                }
                else
                {
                echo "Database error,please try again";
                }
               
            }else{
                echo "Please check your password again";
            }

        }else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }