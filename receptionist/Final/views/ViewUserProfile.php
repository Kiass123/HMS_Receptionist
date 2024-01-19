<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
	require_once ('../models/users.php');
?>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../views/Display.css">
    <title>View Profile </title>
  </head>
  <body>

<table border = "1" width = "1000px" height = "500px" align="center">
	  
  
	  <tr>
		  <th>Id</th>
		  <th>Name</th>
		  <th>Email </th>
		  <th>Username</th>
		  <th>Password</th>
		  <th>Gender</th>
		  <th>Date of birth</th>
		  
		  
		  
	  </tr>
	  <?php 
				  $result = getUsers();
				   while ($row = mysqli_fetch_assoc($result)) {
	  ?>

	  
	  <tr>   
		  
				  <td><?=$row['id']?></td>
				  <td><?=$row['name']?></td>
				  <td><?=$row['email']?></td>
				  <td><?=$row['username']?></td>
				  <td><?=$row['password']?></td>
				  <td><?=$row['gender']?></td>
				  <td><?=$row['dob']?></td>
				 
				 
	  </tr>

  <tr>
  <?php

										  }

?>
</tr>
	  </table>




  </body>
</html>
