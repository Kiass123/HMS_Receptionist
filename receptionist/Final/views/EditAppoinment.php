<?php 
    require_once ('../models/appoinmentDb.php');
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: ../views/rlogin.html');
    }
    $a_id = $_REQUEST['a_id'];
    $row = appoinment_info($a_id);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../views/Display.css">

   <body>
    <form method="POST" action="../controlers/updateCheck.php" enctype="multipart/form-data">
    <input type="hidden" name="a_id" value="<?=$a_id?>"/>

      <table border = "1" width = "1000px" height = "500px" align="center">

        
            <tr>
                <td>
                <b>Appoinment Id</b><br><hr>
                <b>Patient Name</b><br><hr>
                <b>Email</b><br><hr>
                <b>Phone</b><br><hr>
                <b>Date</b><br><hr>
                <b>Time</b><br><hr>
                <b>Gender</b><br><hr>
                <b>Field</b><br><hr>
                <b>Doctor name</b><br><hr>
                </td>
                <td align="center">
								<b><?=$row['a_id']?></b><br><hr>
								<input type="text" name="name" value="<?=$row['name']?>"/></b><br><hr>
								<input type="email" name="email" value="<?=$row['email']?>"/></b><br><hr>
								<input type="phone" name="phone" value="<?=$row['phone']?>"/></b><br><hr>
								<input type="date" name="date" value="<?=$row['date']?>"/></b><br><hr>
								<input type="time" name="time" value="<?=$row['time']?>"/></b><br><hr>

                                <input type="radio" name="gender" value="Male"<?php if($row['gender'] == "male") { echo "checked";}?>/> <b >Male</b>
								<input type="radio" name="gender" value="Female"<?php if($row['gender'] == "female") { echo "checked";}?>/> <b >Female</b>
								<input type="radio" name="gender" value="Other" <?php if($row['gender'] == "other") { echo "checked";}?>/> <b >Other</b><br><hr>

                                <select name="field">
                                        <option value="Immunologists" <?php if($row['field'] == "Immunologists") { echo "checked";}?>>Immunologists</option>
                                        <option value="Anesthesiologists" <?php if($row['field'] == "Anesthesiologists") { echo "checked";}?>>Anesthesiologists</option>
                                        <option value="Cardiologists"<?php if($row['field'] == "Cardiologists") { echo "checked";}?>>Cardiologists</option>
                                        <option value="Dermatologists"<?php if($row['field'] == "Dermatologist") { echo "checked";}?>>Dermatologists</option>
                                        <option value="Gastroenterologists"<?php if($row['field'] == "Gastroenterologists") { echo "checked";}?>>Gastroenterologists</option>
                                        <option value="Hematologists"<?php if($row['field'] == "Hematologists") { echo "checked";}?>>Hematologists</option>
                                        <option value="Neurologists"<?php if($row['field'] == "Neurologists") { echo "checked";}?>>Neurologists</option>
                                        <option value="Pediatricians"<?php if($row['field'] == "Pediatricians") { echo "checked";}?>>Pediatricians</option>
                                        <option value="Psychiatrists"<?php if($row['field'] == "Psychiatrists") { echo "checked";}?>>Psychiatrists</option>
                                        <option value="Urologists"<?php if($row['field'] == "Urologists") { echo "checked";}?>>Urologists</option>
                                    </select> </b><br><hr>

                                <input type="text" name="dname" value="<?=$row['dname']?>"/></b><br><hr>   

					</td>
						

                        <tr>
							<td colspan="3" align="center">
								<br><input type="submit" name="update" value="Update" style="font-size: 25px;" class="btn" /></a> <input type="reset" name="reset" value="Reset" style="font-size: 25px;" class="btn" /> <br>
							</td>
						</tr>
            </tr>
        </tr>
      </table>
</form>


   </body>
	
</html>