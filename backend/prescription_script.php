<?php

    //database connection

    $db = mysqli_select_db($con,'nesthet');


    if (isset($_POST['insert']))
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $diagnosis = $_POST['diagnosis'];
        $treatment = $_POST['treatment'];
        //sql injection security
        //prepare statement
       $insert_query = "INSERT INTO tbl_prescription(name,age,gender,address,date,time,diagnosis,treatment)VALUES (?,?,?,?,?,?,?,?)";
       $stmt=$con->prepare($insert_query);
        if(!$stmt){
           //manage error
           echo "error in your query" ;
           exit;
       }
       $stmt->bind_param("ssssssss",$name,$age,$gender,$address,$date,$time,$diagnosis,$treatment);
       $stmt->execute();
       echo "<script> alert ('Record inserted Successfully')</script>";
    }
?>