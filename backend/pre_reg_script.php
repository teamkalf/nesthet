<?php

    //database connection
    $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {
        //declaration of variables

        $name = $_POST['name'];
        $age = $_POST['age'];
        $occupation = $_POST['occupation'];
        $organization = $_POST['organization'];
        $designation = $_POST['designation'];
        $marital_status = $_POST['marital_status'];
        $telephone = $_POST['telephone'];
        $address = $_POST['address'];
        $compound_name = $_POST['compound_name'];
        $compound_head = $_POST['compound_head'];
        $compound_head_phone = $_POST['compound_head_phone'];
        $email = $_POST['email'];
        $nextOf_kin = $_POST['nextOf_kin'];
        $relationship = $_POST['relationship'];
        $contact_person = $_POST['contact_person'];
        $contact_person_phone = $_POST['contact_person_phone'];
        $nearest_landmark = $_POST['nearest_landmark'];
        $existing_disease = $_POST['existing_disease'];
        $medication = $_POST['medication'];

        //sql injection security

        $name = mysqli_real_escape_string($con,$name);
        $age = mysqli_real_escape_string($con,$age);
        $occupation = mysqli_real_escape_string($con,$occupation);
        $organization = mysqli_real_escape_string($con,$organization);
        $designation = mysqli_real_escape_string($con,$designation);
        $marital_status = mysqli_real_escape_string($con,$marital_status);
        $telephone = mysqli_real_escape_string($con,$telephone);
        $address = mysqli_real_escape_string($con,$address);
        $compound_name = mysqli_real_escape_string($con,$compound_name);
        $compound_head = mysqli_real_escape_string($con,$compound_head);
        $compound_head_phone = mysqli_real_escape_string($con,$compound_head_phone);
        $email = mysqli_real_escape_string($con,$email);
        $nextOf_kin = mysqli_real_escape_string($con,$nextOf_kin);
        $relationship = mysqli_real_escape_string($con,$relationship);
        $contact_person = mysqli_real_escape_string($con,$contact_person);
        $contact_person_phone = mysqli_real_escape_string($con,$contact_person_phone);
        $nearest_landmark = mysqli_real_escape_string($con,$nearest_landmark);
        $existing_disease = mysqli_real_escape_string($con,$existing_disease);
        $medication = mysqli_real_escape_string($con,$medication);

        //sql insert query

        $insert_query = ("INSERT into tbl_pre_registration (name , age , occupation , organization , designation , marital_status , telephone , address , compound_name , compound_head , compound_head_phone , email , nextOf_kin , relationship , contact_person , contact_person_phone , nearest_landmark , existing_disease , medication)
        VALUES ('$name' , '$age' , '$occupation' , '$organization' , '$designation' , '$marital_status' , '$telephone' , '$address' , '$compound_name' , '$compound_head' , '$compound_head_phone' , '$email' , '$nextOf_kin' , '$relationship' , '$contact_person' , '$contact_person_phone' , '$nearest_landmark' , '$existing_disease' , '$medication')");

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