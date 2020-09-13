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

        //sql insert query

        $insert_query = ("INSERT into tbl_request (name , age , gender , address , date , time , complain , request , signed_by)
        VALUES ('$name' , '$age' , '$gender' , '$address' , '$date' , '$time' , '$complain' , '$request' , '$signedBy')");

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