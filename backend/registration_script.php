<?php

    //database connection
    $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $age = $_POST['age'];
        $reg_nurse = $_POST['reg_nurse'];
        $address = $_POST['address'];
        $occupation = $_POST['occupation'];
        $region = $_POST['region'];
        $district = $_POST['district'];
        $No_ofKids = $_POST['No_of_kids'];
        $No_ofWives = $_POST['No_of_wives'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $nextOf_kin = $_POST['nextOf_kin'];
        $relationship = $_POST['relationship'];
        $nextOf_kin_address = $_POST['nextOf_kin_address'];
        $medical_history = $_POST['medical_history'];
        $surgical_history = $_POST['surgical_history'];
        $family_history = $_POST['family_history'];
        $personnel_name = $_POST['personnel_name'];
        $designation = $_POST['designation'];
        $department = $_POST['department'];
        $signature = $_POST['signature'];

        //sql insert query

        $insert_query = ("INSERT into tbl_registration (name , gender , date , age , reg_nurse , address , occupation , region , district , No_of_kids , No_of_wives , email , telephone , nextOf_kin , relationship , nextOf_kin_address , medical_history , surgical_history , family_history , personnel_name , designation , department , signature)
        VALUES ('$name' , '$gender' , '$date' , '$age' , '$reg_nurse' , '$address' , '$occupation' , '$region' , '$district' , '$No_ofKids' , '$No_ofWives' , '$email' , '$telephone' , '$nextOf_kin' , '$relationship' , '$nextOf_kin_address' , '$medical_history' , '$surgical_history' , '$family_history' , '$personnel_name' , '$designation' , '$department' , '$signature')");

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