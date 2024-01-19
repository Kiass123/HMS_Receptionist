<?php 
    require_once('db.php');

    function loginCheck($username, $password){

        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function getUser($username)
    {
        $con = getConnection();
        $sql = "select * from users where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
   
    }

    function getUsers()
    {
        $con = getConnection();
        $sql = "select * from users";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    function addUser($user){
        $con = getConnection();
        $sql = "insert into users values('', '{$user['name']}', '{$user['email']}', '{$user['username']}','{$user['password']}','{$user['gender']}','{$user['dob']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>