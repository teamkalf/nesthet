<?php

    //database connection
    $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {
        //declaration of variables

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $complain = $_POST['complain'];
        $request = $_POST['request'];
        $signedBy = $_POST['signed_by'];
        //prepare statement
       $insert_query = "INSERT INTO tbl_request (name , age , gender , address , date , time , complain , request , signed_by)VALUES (?,?,?,?,?,?,?,?,?)";
       $stmt=$con->prepare($insert_query);
        if(!$stmt){
           //manage error
           echo "error in your query" ;
           exit;
       }
       $stmt->bind_param("sssssssss",$name , $age , $gender , $address , $date , $time , $complain , $request , $signedBy);
       $stmt->execute();
       echo "<script> alert ('Record inserted Successfully')</script>";
    }
?>