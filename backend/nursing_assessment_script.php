<?php

    //database connection
    $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {   
        //personal data
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $reg_nurse = $_POST['reg_nurse'];
        $current_complain = $_POST['current_complain'];

        // vital
        $blood_pressure = $_POST['blood_pressure'];
        $temperature = $_POST['temperature'];
        $heart_rate = $_POST['heart_rate'];
        $respiratory_rate = $_POST['respiratory_rate'];
        $oxygen_saturation = $_POST['oxygen_saturation'];

        // examination
        $illness = $_POST['illness'];

        $opt = $_POST['optional'];
        $optional = implode (',',$opt);

        $jaundice = $_POST['jaundice'];
        $edema = $_POST['edema'];

        // human system
        $respiratory = $_POST['respiratory_system'];
        $cardiovascular = $_POST['cardiovascular_system'];
        $nervous = $_POST['internal_nervous_system'];
        $gastro = $_POST['gastro_intestinal_system'];
        $differential = $_POST['differential_diagnosis'];
        $final = $_POST['final_diagnosis'];
        $treatment = $_POST['treatment'];
        $health_education = $_POST['health_education'];

        //routine lab test
        $rbs = $_POST['rbs'];
        $fbs = $_POST['fbs'];
        $hb = $_POST['hb'];
        $blood_group = $_POST['b_group'];
        $rdt = $_POST['rdt'];
        $wbc = $_POST['wbc'];

        //urinalysis
        $urine = $_POST['urine'];

        // image upload codes
        $tittle = $_POST['tittle'];
        $img = $_FILES['image']['name'];

        // complete by

        $personnel_name = $_POST['personnel_name'];
        $designation = $_POST['designation'];
        $signature = $_POST['signature'];

        //sql injection security
        $name = mysqli_real_escape_string($con,$name);

         //sql insert query

         $insert_query = ("INSERT into tbl_nursing_assessment (name , gender , date , reg_nurse , current_complain , bp , temp , pr , rr , 02_sat , illness , optional , jaundice , edema , respiratory_system , cardiovascular_system , internal_nervous_system , gastro_intestinal_system , differential_diagnosis , final_diagnosis , treatment , health_education , rbs , fbs , hb , b_group , rdt , wbc , urine , tittle , image , personnel_name , designation , signature)
         VALUES ('$name' , '$gender' , '$date' , '$reg_nurse' , '$current_complain' , '$blood_pressure ' , '$temp ' , '$pr' , '$rr' , '$sat_02' , '$illness' , '$optional' , '$jaundice' , '$edema' , '$respiratory' , '$cardiovascular' , '$nervous' , '$gastro' , '$differential' , '$final' , '$treatment' , '$health_education ' , '$rbs' , '$fbs' , '$hb' , '$blood_group' , '$rdt' , '$wbc' , '$urine' , '$tittle' , '$img' , '$personnel_name' , '$designation' , '$signature')");
 
         //run sql insert query
 
         if(mysqli_query($con,$insert_query))
         {
             echo "<script> alert ('Record inserted Successfully') </script>";
         }
         else
         {
            echo "<script> alert ('Record Failed to inserted please try again') </script>";
         }
    }
    //move_uploaded_file($_FILES['image']['tmp_name'], "uploaded_files/$img");

?>