<?php 
    require_once('db.php');

    function add($a){
        $con = getConnection();
        $sql = "insert into delivery values( '{$a['date']}', '{$a['name']}', '{$a['address']}','{$a['phone']}','{$a['package_weight']}','{$a['courier']}','{$a['payment']}','{$a['ddate']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }



function getdelivery()
    {
        $con = getConnection();
        $sql = "SELECT * FROM delivery";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    ?>