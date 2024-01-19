
<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: rlogin.html');

    }

?>

<html>

   <head>
      <title>User Dashboard</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
	
   <body>

      <table border = "1" width = "800" height = "350" align="center">
         
            <tr>
                <td colspan = "3"  align="center" >Welcome <?=$_SESSION['current_user']['name']?>!!</td>
             </tr>
         <tr>
            <td rowspan = "4"   >
            <a href="help.php">Help and Support</a><br>
                <a href="ViewUserProfile.php">View Profile</a><br>
                <a href="RegistrationPage.html">Registration</a><br>
                
                <a href="../controlers/Logout.php?username=<?=$_COOKIE['status']?>">Log out</a>

            </td>
            <td   align="center">
                <a href="../views/AddAppoint.php">Appoinment</a>
            </td>
            <td align ="center">
            <a href="../views/notification.php">Notification</a>
            </td>
           
         </tr>
         <tr>
            <td   align="center">
                <a href="../views/Bill.php">Billing</a><br>
            </td>
            <td   align="center">
                <a href="../views/delivery.php">Delivery</a><br>
            </td>
         <tr>
            

            
      </table>
   </body>
	
</html>
