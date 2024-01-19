<?php 
    require_once ('../models/notificationDb.php');
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
                <th>Receiver</th>
                <th>Message</th>
                
                
            </tr>
            <?php 
                        $result = get();
                         while ($row = mysqli_fetch_assoc($result)) {
            ?>

            
            <tr>   
                
                        <td><?=$row['receiver']?></td>
                        <td><?=$row['message']?></td>
                       
            </tr>

        <tr>
        <?php

                                                }

?>
</tr>
            </table>

      
   </body>
	
</html>