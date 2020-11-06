<?php
    include 'server-connection.php';//sever connection
    $db = mysqli_select_db($con,'nesthet');//database connection

    $update = false; //update button
    //clear fills 
        $registration_No = "";
        $name = "";
        $gender = "";
        $date = "";
        $age = "";
        $reg_nurse = "";
        $address = "";
        $occupation = "";
        $region = "";
        $district = "";
        $No_ofKids = "";
        $No_ofWives = "";
        $email = "";
        $telephone = "";
        $nextOf_kin = "";
        $relationship = "";
        $nextOf_kin_address = "";
        $medical_history = "";
        $surgical_history = "";
        $family_history = "";
        $personnel_name = "";
        $designation = "";
        $department = "";
        $signature = "";

    //delete query using prepare statement
    if(isset($_GET['delete'])){
        $registration_No = $_GET['delete'];
        $query = "DELETE FROM tbl_registration WHERE registration_No =?";
        $stmt =$con->prepare($query);
        $stmt->bind_param("i",$registration_No);
        $stmt->execute();
        header('location:tbl_registration.php');
        echo "<script> alert ('Record deleted Successfully')</script>";
        //delete button script ends here
    }
    //update button script starts here
    if(isset($_GET['edit'])){
        $registration_No = $_GET['edit'];

        $query = "SELECT * FROM tbl_registration WHERE registration_No =?";
        $stmt=$con->prepare($query);
        $stmt->bind_param("i",$registration_No);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $registration_No = $row['registration_No'];
        $name = $row['name'];
        $gender = $row['gender'];
        $date = $row['date'];
        $age = $row['age'];
        $reg_nurse = $row['reg_nurse'];
        $address = $row['address'];
        $occupation = $row['occupation'];
        $region = $row['region'];
        $district = $row['district'];
        $No_ofKids = $row['No_of_kids'];
        $No_ofWives = $row['No_of_wives'];
        $email = $row['email'];
        $telephone = $row['telephone'];
        $nextOf_kin = $row['nextOf_kin'];
        $relationship = $row['relationship'];
        $nextOf_kin_address = $row['nextOf_kin_address'];
        $medical_history = $row['medical_history'];
        $surgical_history = $row['surgical_history'];
        $family_history = $row['family_history'];
        $personnel_name = $row['personnel_name'];
        $designation = $row['designation'];
        $department = $row['department'];
        $signature = $row['signature'];

        $update = true; //update button
    }
    //update query
    if(isset($_POST['update'])){
        $registration_No = $_POST['registration_No'];
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
        //run update query
        $query = "UPDATE tbl_registration SET name=?,gender=?,date=?,age=?,reg_nurse=?,address=?,occupation=?,region=?,district=?,No_of_kids=?,No_of_wives=?,email=?,telephone=?,nextOf_kin=?,relationship=?,nextOf_kin_address=?,medical_history=?,surgical_history=?,family_history=?,personnel_name=?,designation=?,department=?,signature=? WHERE registration_No=?";

        $stmt=$con->prepare($query);
        $stmt->bind_param("sssssssssssssssssssssss",$name , $gender , $date , $age , $reg_nurse , $address , $occupation , $region , $district , $No_ofKids , $No_ofWives , $email , $telephone , $nextOf_kin , $relationship , $nextOf_kin_address , $medical_history , $surgical_history , $family_history , $personnel_name , $designation , $department , $signature,$registration_No);
        $stmt->execute();

        echo "<script> alert ('Record updated Successfully')</script>";
        header('location:tbl_registration.php');
    }
?>