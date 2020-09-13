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

        $name = mysqli_real_escape_string($con, $name);
        $age = mysqli_real_escape_string($con, $age);
        $gender = mysqli_real_escape_string($con, $gender);
        $address = mysqli_real_escape_string($con, $address);
        $date = mysqli_real_escape_string($con, $date);

        //sql insert query

        $insert_query = ("INSERT into tbl_prescription (name , age , gender , address , date , time , diagnosis , treatment)
        VALUES ('$name' , '$age' , '$gender' , '$address' , '$date' , '$time' , '$diagnosis' , '$treatment')");

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

?>