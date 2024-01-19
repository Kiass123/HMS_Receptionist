<?php 
    require_once('../models/db.php');

    function add($a){
        $con = getConnection();

        $sql = "insert into help values('{$a['choice']}', '{$a['question']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }



?>