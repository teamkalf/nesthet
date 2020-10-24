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
        //prepare statement
        $insert_query = "INSERT into tbl_pre_registration(name , age , occupation , organization , designation , marital_status , telephone , address , compound_name , compound_head , compound_head_phone , email , nextOf_kin , relationship , contact_person , contact_person_phone , nearest_landmark , existing_disease , medication)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$con->prepare($insert_query);
        //error management
        if(!$stmt){
            echo "error in your query";
            exit;
        }
        $stmt->bind_param("sssssssssssssssssss",$name , $age , $occupation , $organization , $designation , $marital_status , $telephone , $address , $compound_name , $compound_head , $compound_head_phone , $email , $nextOf_kin , $relationship , $contact_person , $contact_person_phone , $nearest_landmark , $existing_disease , $medication);
        $stmt->execute();
        echo "<script> alert ('Record inserted Successfully') </script>";
    }

?>