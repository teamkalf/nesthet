<?php
    include 'server-connection.php';//sever connection
    $db = mysqli_select_db($con,'nesthet');//database connection

    $update = false;
     //clear fills open
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

     //clear fills close
     //query for the delete button

     if(isset($_GET['delete'])){
         $registration_No = $_GET['delete'];

         $query = "DELETE FROM tbl_registration WHERE registration_No=?";
         $stmt=$con->prepare($query);
         $stmt->bind_param("i",$registration_No);
         $stmt->execute();

         echo "<script> alert ('Record deleted Successfully')</script>";
     }
     //source codes for edit button

     if(isset($_GET['edit'])){
         $registration_No = $_GET['edit'];
         $query = "SELECT * FROM tbl_registration WHERE registration_NO =?";
         $stmt= $con->prepare($query);
         $stmt->bind_param("i",$registration_No);
         $stmt->execute();
         $result=$stmt->get_result();
         $row = $result->fetch_assoc();

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

         $update = true;
     }
     //source code for updating record
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
         $query = "UPDATE tbl_registration set name=? , gender=? , date=? , age=? , reg_nurse=? , address=? , occupation=? , region=? , district=? , No_of_kids=? , No_of_wives=? , email=? , telephone=? , nextOf_kin=? , relationship=? , nextOf_kin_address=? , medical_history=? , surgical_history=? , family_history=? , personnel_name=? , designation=? , department=? , signature=? where registration_No=?";
         $stmt=$con->prepare($query);
         $stmt->bind_param("sssisssssiisissssssssssi",$name , $gender , $date , $age , $reg_nurse , $address , $occupation , $region , $district , $No_ofKids , $No_ofWives , $email , $telephone , $nextOf_kin , $relationship , $nextOf_kin_address , $medical_history , $surgical_history , $family_history , $personnel_name , $designation , $department , $signature , $registration_No);
         $stmt->execute();

         echo "<script> alert ('Record updated Successfully')</script>";
         header('location:tbl_registration.php');
     }
     //source codes for the details button
     if(isset($_GET['details'])){
         $registration_No = $_GET['details'];
         $query = "SELECT * FROM tbl_registration where registration_No=?";
         $stmt = $con->prepare($query);
         $stmt->bind_param("i",$registration_No);
         $stmt->execute();
         $result=$stmt->get_result();
         $row=$result->fetch_assoc();

         $vregistration_No = $row['registration_No'];
         $vname = $row['name'];
         $vgender = $row['gender'];
         $vdate = $row['date'];
         $vage = $row['age'];
         $vreg_nurse = $row['reg_nurse'];
         $vaddress = $row['address'];
         $voccupation = $row['occupation'];
         $vregion = $row['region'];
         $vdistrict = $row['district'];
         $vNo_ofKids = $row['No_of_kids'];
         $vNo_ofWives = $row['No_of_wives'];
         $vemail = $row['email'];
         $vtelephone = $row['telephone'];
         $vnextOf_kin = $row['nextOf_kin'];
         $vrelationship = $row['relationship'];
         $vnextOf_kin_address = $row['nextOf_kin_address'];
         $vmedical_history = $row['medical_history'];
         $vsurgical_history = $row['surgical_history'];
         $vfamily_history = $row['family_history'];
         $vpersonnel_name = $row['personnel_name'];
         $vdesignation = $row['designation'];
         $vdepartment = $row['department'];
         $vsignature = $row['signature'];
     }
?>