<?php

     //database connection

     $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {
        //declaring of variables text boxes

        $referredFrom = $_POST['referred_from'];
        $referredTo = $_POST['referred_to'];
        $name= $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $nationality = $_POST['nationality'];

        //this includes check and text box
        $lang = $_POST['language'];
        $language = implode (',',$lang);
        
        $other_language = $_POST['other'];
        $referralDate = $_POST['referral_date'];
        $referralTime = $_POST['referral_time'];
        $history = $_POST['history'];
        $finding = $_POST['finding'];
        $impression = $_POST['impression'];
        $action = $_POST['action'];
        $treatment = $_POST['treatment'];
        $reason = $_POST['reason'];
        $personnel = $_POST['personnel'];
        $signedBy= $_POST['signed_by'];
        //sql injection security
        //prepare statement
       $insert_query = "INSERT INTO referral_tbl (referred_from , referred_to , name , age , gender , address , nationality , language , other , referral_date , referral_time , history , finding , impression , action , treatment , reason , personnel , signed_by)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stmt=$con->prepare($insert_query);
        if(!$stmt){
           //manage error
           echo "error in your query" ;
           exit;
       }
       $stmt->bind_param("sssssssssssssssssss",$referredFrom , $referredTo , $name , $age , $gender , $address , $nationality , $language, $other_language , $referralDate , $referralTime , $history , $finding , $impression , $action , $treatment , $reason , $personnel , $signedBy);
       $stmt->execute();
       echo "<script> alert ('Record inserted Successfully')</script>";
    }

?>