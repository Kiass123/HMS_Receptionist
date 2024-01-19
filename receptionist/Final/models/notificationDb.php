<?php 
    require_once('../models/db.php');

    function add($a){
        $con = getConnection();

        $sql = "insert into notification values('{$a['receiver']}', '{$a['message']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function add_d($a){
        $con = getConnection();

        $sql = "insert into notification_d values('{$a['receiver']}', '{$a['message']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function add_n($a){
        $con = getConnection();

        $sql = "insert into all_n values('{$a['receiver']}', '{$a['message']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function get()
    {
        $con = getConnection();
        $sql = "select * from all_n";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>