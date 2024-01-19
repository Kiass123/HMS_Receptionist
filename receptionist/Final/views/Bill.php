<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <header>
        
    <div class="button-container">
            <a href="../controlers/Logout.php?username=<?=$_COOKIE['status']?>" class="button button1">Log Out</a>
            <a href="../views/UserDashboard.php" class="button button2">Home</a>
            <a href="../views/viewBill.php" class="button button2">View</a>
            <form method="post" action="../controlers/profitCheck.php" enctype="">
                  
                                <input type="submit" name="profit" value="Profit" class="delete">
            </form>
           

            </div>
            <div class="container">
</header>

   <body>
   <link rel="stylesheet" type="text/css" href="container.css">
   <link rel="stylesheet" type="text/css" href="bstyle.css">


            

            <div class="container">
  
      
            <form  method="post" action="../controlers/BillCheck.php" enctype="" onsubmit="return billvalidation()">
            <fieldset>
                <tr>
                    <td  align="center">
                        
                            <fieldset>
                                <legend>Billing</legend>
                                <table>
                                    <tr>
                                        <td>Patient Name: </td>
                                        <td>:</td>
                                        <td><input id="name" type="text" name="name" value=""></td>
                                    </tr>
                    
                                    <tr>
                                        <td>Patient Address </td>
                                        <td>:</td>
                                        <td><input id="address" type="text" name="paddress" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Number </td>
                                        <td>:</td>
                                        <td><input id="number" type="number" name="pnumber" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Admit Date </td>
                                        <td>:</td>
                                        <td><input id="date" type="date" name="adate" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Release Date</td>
                                        <td>:</td>
                                    
                                        <td><input id="rdate" type="date" name="rdate"></td>
                                        <hr>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan ="3"> 
                                            <input id="male" type="radio" name="gender" value="" /> Male
                                            <input id="female" type="radio" name="gender" value= /> Female
                                            <input id="other" type="radio" name="gender" value="" /> Other
                                        </td>
                                        
                                    </tr>
                                </table>
                                
                              
                                <hr>
                                <table>
                                    <tr>
                                    <td>Room Charge(Per day)</td>
                                        <td>:</td>
                                        <td><input id="rc" type="number" name="roomCost" value=""></td>
                                    </tr>
                                    <tr>
                                    <td>Doctor fee</td>
                                        <td>:</td>
                                        <td><input id="dc" type="number" name="dfee" value=""></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                    <td>Medicine Cost</td>
                                        <td>:</td>
                                        <td><input id="mc" type="number" name="mCost" value=""></td>
                                    </tr>
                                    <tr>
                                    <td>Other charge</td>
                                        <td>:</td>
                                        <td><input id="oc" type="number" name="oCost" value=""></td>
                                    </tr>
                                    </tr>
                                    </tr>
                                </table>
                                <hr>
                                <input type="submit" name="btn" id="Submit">
                                <input type="reset" id="Reset">
                                
                            </fieldset>
                    </td>
                </tr>
            </fieldset>
            </form>      
            </div>
        
                                <div>
                                <form id="bill">
                                <button type="submit" id="submitBtn">Receipt</button>
                                </form>
                                </div>

<div id="receipt"></div>

<script>
  // AJAX function to send form data to receipt.php
  document.getElementById("bill").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(event.target);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "receipt.php");
    xhr.onload = function() {
      document.getElementById("receipt").innerHTML = this.responseText;
    };
    xhr.send(formData);
  });
</script>


      <script>
		
        function billvalidation(){
    
          let name = document.getElementById('name').value;
          let address = document.getElementById('address').value;
          let phone = document.getElementById('number').value;
          let date = document.getElementById('date').value;
          let rdate = document.getElementById('rdate').value;
          let rc = document.getElementById('rc').value;
          let dc = document.getElementById('dc').value;
          let mc = document.getElementById('mc').value;
          let oc = document.getElementById('oc').value;
        //   $num = phone;
        //   $num_str = strval($num);
        //   $num_digits = strlen($num_str);

echo "The number of digits in $num is: $num_digits";

          
    
          if (name == "") {
            alert("Please enter patient's name"); return false;
          }
          else if (address == "") {
            alert("Please enter patient's address"); return false;
          }
          else if (phone == "" && phone.length != 12) {
            alert("Please enter number not longer than 11 digit"); return false;
          }
          else if (date == ""  || rdate==" ") {
  
            alert("Please enter dates"); return false;
          }
          else if (rc==" " &&  dc==" " &&  mc==" " && oc==" ") {
            alert("Please enter cost of each"); return false;
          }
          else if (document.getElementById('male').checked == false && document.getElementById('female').checked == false && document.getElementById('other').checked == false) {
            alert("Please select your gender"); return false;
          }
         
          else {
            return true;
          }
        }
      </script>  
   </body>
	
</html>