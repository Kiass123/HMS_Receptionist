<?php 
    require_once('db.php');
    $total;

    function add($a){
        $con = getConnection();
        $sql = "insert into bill values( '{$a['name']}', '{$a['paddress']}', '{$a['pnumber']}','{$a['adate']}','{$a['rdate']}','{$a['gender']}','{$a['roomCost']}','{$a['dfee']}','{$a['mCost']}','{$a['oCost']}','{$a['total']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function getTotal()
    {
        $con = getConnection();
        $sql = "SELECT SUM(total) as sum FROM bill";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $total = $row['sum'];
        return $total;
    }

    function get()
    {
        $con = getConnection();
        $sql = "select * from bill";
        $status = mysqli_query($con, $sql);
        return $status;
    }
?>