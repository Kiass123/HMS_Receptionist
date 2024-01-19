<?php 
    session_start();
    require_once('../models/billDb.php');

    if(isset($_POST['btn'])){

        $name = $_POST['name'];
        $paddress = $_POST['paddress'];
        $pnumber = $_POST['pnumber'];
        $adate = $_POST['adate'];
        $rdate = $_POST['rdate'];
        if (empty($_POST['gender'])) {
            echo "Gender is not selected.". "<br>";
            $gender=null;
        }else{
            $gender = $_POST['gender'];
        }
        $roomCost = $_POST['roomCost'];
        $dfee = $_POST['dfee'];
        $mCost = $_POST['mCost'];
        $oCost = $_POST['oCost'];
        $diff = strtotime($rdate) - strtotime($adate);
        $diff_days = intval($diff / (60 * 60 * 24));
        // echo "The difference between $rdate and $adate is $diff_days days.";
        $total=$dfee+$mCost+$oCost+($diff_days*$roomCost);


        if($name != null && $paddress!= null && $pnumber != null && $adate != null && $rdate != null && $roomCost != null && $dfee !=null && $mCost !=null )
           
            {
                $a=['name'=>$name,'paddress'=>$paddress,'pnumber'=>$pnumber,'adate'=>$adate,'rdate'=>$rdate,'gender'=>$gender,'roomCost'=>$roomCost,'dfee'=>$dfee,'mCost'=>$mCost,'oCost'=>$oCost,'total'=>$total];
                
                add($a);
               
                
                echo "Success!!";
                header('location: ../views/viewBill.php');
               
            }
        

     else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }
    ?>
