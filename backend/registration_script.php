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
        //prepare statement
       $insert_query = "INSERT INTO tbl_registration (name , gender , date , age , reg_nurse , address , occupation , region , district , No_of_kids , No_of_wives , email , telephone , nextOf_kin , relationship , nextOf_kin_address , medical_history , surgical_history , family_history , personnel_name , designation , department , signature)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stmt=$con->prepare($insert_query);
        if(!$stmt){
           //manage error
           echo "error in your query" ;
           exit;
       }
       $stmt->bind_param("sssssssssssssssssssssss",$name , $gender , $date , $age , $reg_nurse , $address , $occupation , $region , $district , $No_ofKids , $No_ofWives , $email , $telephone , $nextOf_kin , $relationship , $nextOf_kin_address , $medical_history , $surgical_history , $family_history , $personnel_name , $designation , $department , $signature);
       $stmt->execute();
       
       echo "<script> alert ('Record inserted Successfully')</script>";
    }
?>