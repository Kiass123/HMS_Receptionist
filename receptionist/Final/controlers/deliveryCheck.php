
<?php 
    session_start();
    require_once('../models/deliveryDb.php');

    if(isset($_POST['dsubmit'])){

        $date = $_POST['date'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $package_weight = $_POST['package_weight'];

        $c  = $_POST['c'];
        $payment = $_POST['payment'];
        $d;
       
        if($c=="Pathao")
        {
            $d=2;
        }
        else if ($c=="RedX")
        {
            $d=3;
        }
        else if ($c=="RedX")
        {
            $d=4;
        }

        else
        {
            $d=5;
            
        }

        // $ddate=date(strtotime($date+$d ));

        $ddate = date('Y-m-d', strtotime($date . ' +' . $d . ' days'));
     

        if($date != null && $name != null && $address!= null && $phone != null && $package_weight != null && $c!= null && $payment !=null  )
           
            {
                $a=['date'=>$date,'name'=>$name,'address'=>$address,'phone'=>$phone,'package_weight'=>$package_weight,'courier'=>$c,'payment'=>$payment,'ddate'=>$ddate];
                
                add($a);
               
                header('location: ../views/Display_Delivery.php');
               
            }
        

     else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }

    