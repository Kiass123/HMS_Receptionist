<?php 
    require_once('db.php');

    function add($a){
        $con = getConnection();
        $sql = "insert into appoinment values('', '{$a['name']}', '{$a['email']}', '{$a['phone']}','{$a['date']}','{$a['time']}','{$a['gender']}','{$a['field']}','{$a['dname']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function update($a)
    {
        $con = getConnection();
        $sql="update appoinment set name='{$a['name']}', email='{$a['email']}', phone='{$a['phone']}', date='{$a['date']}', time='{$a['time']}', gender='{$a['gender']}', field='{$a['field']}', dname='{$a['dname']}' where a_id='{$a['a_id']}'";
       // $sql = "update  appoinment set('', '{$a['name']}', '{$a['email']}', '{$a['phone']}','{$a['date']}','{$a['time']}','{$a['gender']}','{$a['field']}','{$a['dname']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;

    }

    function delete($a_id)
    {
       
            $con = getConnection();
            $sql="DELETE FROM `appoinment` WHERE `a_id` = {$a_id}";
            
            return mysqli_query($con, $sql);

    }

    function getAppoinment()
    {
        $con = getConnection();
        $sql = "select * from appoinment";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function appoinment_info($a_id)
    {
        $con = getConnection();
        $sql = "select * from appoinment where a_id='{$a_id}'";
        $status = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($status);
        return $row;

    }

?>