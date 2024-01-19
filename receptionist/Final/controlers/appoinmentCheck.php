<?php 
    session_start();
    require_once('../models/appoinmentDb.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        if (empty($_POST['gender'])) {
            echo "Gender is not selected.". "<br>";
            $gender=null;
        }else{
            $gender = $_POST['gender'];
        }
        $field = $_POST['field'];
        $dname = $_POST['dname'];


        if($name != null && $email != null && $phone != null && $date != null && $time != null && $gender != null && $field !=null && $dname !=null )
           
            {
                $a=['name'=>$name,'email'=>$email,'phone'=>$phone,'date'=>$date,'time'=>$time,'gender'=>$gender,'field'=>$field,'dname'=>$dname];
                
                add($a);
               
                header('location: ../views/DisplayAppoint.php');
               
            }
        

     else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }

    