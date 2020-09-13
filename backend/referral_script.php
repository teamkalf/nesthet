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

        $referredFrom = mysqli_real_escape_string($con,$referredFrom);
        $referredTo = mysqli_real_escape_string($con,$referredTo);
        $name = mysqli_real_escape_string($con,$name);
        $age = mysqli_real_escape_string($con, $age);
        $gender = mysqli_real_escape_string($con,$gender);
        $address = mysqli_real_escape_string($con,$address);
        $nationality = mysqli_real_escape_string($con,$nationality);
        $other_language = mysqli_real_escape_string($con,$other_language);
        $referralDate = mysqli_real_escape_string($con,$referralDate);
        $referralTime = mysqli_real_escape_string($con,$referralTime);
        $history = mysqli_real_escape_string($con,$history);
        $finding = mysqli_real_escape_string($con,$finding);
        $impression = mysqli_real_escape_string($con,$impression);
        $action = mysqli_real_escape_string($con,$action);
        $treatment = mysqli_real_escape_string($con,$treatment);
        $reason = mysqli_real_escape_string($con,$reason);
        $personnel = mysqli_real_escape_string($con,$personnel);
        $signedBy = mysqli_real_escape_string($con,$signedBy);

        //insert query

        $insert_query = ("INSERT into referral_tbl (referred_from , referred_to , name , age , gender , address , nationality , language , other , referral_date , referral_time , history , finding , impression , action , treatment , reason , personnel , signed_by)
         VALUES 
         ('$referredFrom' , '$referredTo' , '$name' , '$age' , '$gender' , '$address' , '$nationality' , '$language', '$other_language' , '$referralDate' , '$referralTime' , '$history' , '$finding' , '$impression' , '$action' , '$treatment' , '$reason' , '$personnel' , '$signedBy')");

         if(mysqli_query($con,$insert_query))
         {
             echo "<script> alert ('Record inserted Successfully') </script>";
         }
         else
         {
            echo "<script> alert ('Record Failed to inserted please try again') </script>";
         }
    }

?>