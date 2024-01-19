<?php

    session_start();
    require_once("../models/appoinmentDb.php");

    if(isset($_REQUEST['delete']))
    {
        $aid = $_REQUEST['aid'];

        $deleted = delete($aid);

        if($deleted)
        {
            echo("The Appointment has been deleted.");
        }
        else
        {
            echo("Could not delete the appointment.");
        }

?>

<?php

    }
    else
    {
        header('location: ../views/ViewAppoinment.php');
    }

?>
