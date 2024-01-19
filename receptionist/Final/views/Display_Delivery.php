<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
	require_once('../models/deliveryDb.php');
?>
<link rel="stylesheet" type="text/css" href="../views/Display.css">
	<table width="800;" height="400px" border="1" >
        
            <tr>
                <th>Sending Date</th>
                <th>Receiver name</th>
                <th>Receiver address</th>
                <th>Phone</th>
                <th>Package weight</th>
                <th>Courier service</th>
                <th>Payment methode</th>
				<th>Delivery Date</th>
				
            
                
            </tr>
            <?php 
                        $result = getdelivery();
                         while ($row = mysqli_fetch_assoc($result)) {
            ?>

            
            <tr>   
                
                        <td><?=$row['date']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['address']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['package_weight']?></td>
                        <td><?=$row['courier']?></td>
                        <td><?=$row['payment']?></td>
						<td><?=$row['ddate']?></td>
                       
                       
            </tr>

        <tr>
		
		
        <?php

                                                }

?>



