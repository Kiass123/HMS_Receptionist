<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
   <link rel="stylesheet" type="text/css" href="container.css">
   <link rel="stylesheet" type="text/css" href="astyle.css">


    <header>
        
    <div class="button-container">
            <a href="../controlers/Logout.php?username=<?=$_COOKIE['status']?>" class="button button1">Log Out</a>
            <a href="UserDashboard.php" class="button button2">Home</a>
            <a href="../views/ViewAppoinment.php" class="button button3">View Appointments</a>

    </div>
            
    </header>

         <body>
            <div class="appointment">
                <form method="post" action="../controlers/appoinmentCheck.php" enctype="" onsubmit="return appvalidation()" >
                    <fieldset>
                        <legend>Appointments</legend>
                            <table>
                                    <tr>
                                        <td>Patient Name </td>
                                        <td>:</td>
                                        <td><input id="name" type="text" name="name" value=""></td>
                                    </tr>
                    
                                    <tr>
                                        <td>Patient Email </td>
                                        <td>:</td>
                                        <td><input id="email" type="email" name="email" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Phone number </td>
                                        <td>:</td>
                                        <td><input id="phone" type="number" name="phone" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Date </td>
                                        <td>:</td>
                                        <td><input id="date" type="date" name="date" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Time </td>
                                        <td>:</td>
                                    
                                        <td><input id="time" type="time" name="time"></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td colspan ="3"> 
                                            <input id="male" type="radio" name="gender" value="" /> Male
                                            <input id="female" type="radio" name="gender" value= /> Female
                                            <input id="other" type="radio" name="gender" value="" /> Other
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                    <td>Doctor's Specilization </td>
                                        <td>:</td>
                                        <td>
                                        <select name="field">
                        <option value="Immunologists">Immunologists</option>
                        <option value="Anesthesiologists">Anesthesiologists</option>
                        <option value="Cardiologists">Cardiologists</option>
                        <option value="Dermatologists">Dermatologists</option>
                        <option value="Gastroenterologists">Gastroenterologists</option>
                        <option value="Hematologists">Hematologists</option>
                        <option value="Neurologists">Neurologists</option>
                        <option value="Pediatricians">Pediatricians</option>
                        <option value="Psychiatrists">Psychiatrists</option>
                        <option value="Urologists">Urologists</option>
                                        </select> 
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Doctor name</td>
                                        <td>:</td>
                                        <td><input id="dname" type="text" name="dname" value=""></td>
                                    </tr>
                                </table>
                                </legend>

                                <input type="submit" name="submit" id="Submit">
                                <input type="reset" id="Reset">
                            </fieldset>
                </form>      
        

            </div>
            
    <script>
		
      function appvalidation(){
  
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let date = document.getElementById('date').value;
        let conPassword = document.getElementById('time').value;
        let dname = document.getElementById('dname').value;
          $num = phone;
          $num_str = strval($num);
          $num_digits = strlen($num_str);
        
  
        if (name == "") {
          alert("Please enter patient's name"); return false;
        }
        else if (email == "") {
          alert("Please enter patient's email"); return false;
        }
        else if ( $num_digits == 12) {
          alert("Please enter number not longer than 11 digit"); return false;
        }
        else if (date == ""  ) {

          alert("Please enter date of appointment"); return false;
        }
        else if (time==" ") {
          alert("Please confirm time of appointment"); return false;
        }
        else if (document.getElementById('male').checked == false && document.getElementById('female').checked == false && document.getElementById('other').checked == false) {
          alert("Please select your gender"); return false;
        }
        else if (dname == "") {
          alert("Please enter doctor's name "); return false;
        }
       
        else {
          return true;
        }
      }
    </script>  
   </body>
	
</html>