<?php
session_start();
require_once('../models/billDb.php');

if(isset($_POST['profit']))
{ 
  $result = getTotal();

  echo "Total Proft:, " . $result . "!";

}

else{
echo "Invalid";
}
?>