<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
	require_once('../models/BillDb.php');
?>
<link rel="stylesheet" type="text/css" href="../views/Display.css">
	<table width="800;" height="400px" border="1" >
        
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Admit date</th>
                <th>Release Date</th>
                <th>Total</th>
                
				
            
                
            </tr>
            <?php 
                        $result = get();
                         while ($row = mysqli_fetch_assoc($result)) {
            ?>

            
            <tr>   
                
                        <td><?=$row['name']?></td>
                        <td><?=$row['paddress']?></td>
                        <td><?=$row['adate']?></td>
                        <td><?=$row['rdate']?></td>
                        <td><?=$row['Total']?></td>
                        
                       
                       
            </tr>

        <tr>
		
		
        <?php

                                                }

?>



