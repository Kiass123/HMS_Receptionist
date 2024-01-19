<?php 
    require_once('db.php');

    function add($a){
        $con = getConnection();
        $sql = "insert into profit values( '{$a['inumber']}', '{$a['cnumber']}', '{$a['profit']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    
?>