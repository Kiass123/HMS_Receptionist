<?php 
    require_once ('../models/appoinmentDb.php');
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: ../views/rlogin.html');
    }
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../views/Display.css">


   <body>

      <table border = "1" width = "1000px" height = "500px" align="center">

            <table width="800;" height="400px" border="1" >
        
            <tr>
                <th>Appoinment Id</th>
                <th>Patient Name</th>
                <th>Email </th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Gender</th>
                <th>Field</th>
                <th>Doctor name</th>
                <th>Operation</th>
                
            </tr>
            <?php 
                        $result = getAppoinment();
                         while ($row = mysqli_fetch_assoc($result)) {
            ?>

            
            <tr>   
                
                        <td><?=$row['a_id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['date']?></td>
                        <td><?=$row['time']?></td>
                        <td><?=$row['gender']?></td>
                        <td><?=$row['field']?></td>
                        <td><?=$row['dname']?></td>
                        <td>
                            <a href="../views/EditAppoinment.php?a_id=<?=$row['a_id']?>"> <input type="button" name="edit" value="EDIT" class="edit"> </a> <br>
                            <form method="get" action="../controlers/deleteCheck.php" enctype="">
                                <input type="hidden" name="aid" id="aid" value="<?php echo($row['a_id']); ?>">
                                <input type="submit" name="delete" value="DELETE" class="delete">
                            </form>
                        </td>
                       
            </tr>

        <tr>
        <?php

                                                }

?>
</tr>
            </table>

      
   </body>
	
</html> 

