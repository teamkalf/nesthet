<?php
    include 'server-connection.php';//server connection

    $db = mysqli_select_db($con,'nesthet');//database connection

    if(isset($_POST['insert']))
    {
        // variable declaration
        $name = $_POST['name'];
        $address = $_POST['address'];
        $birth = $_POST['birth'];
        $designation = $_POST['designation'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $school_graduated = $_POST['school_graduated'];
        $qualification_title = $_POST['qualification_title'];
        $qualification = $_FILES['document']['name'];
        $upload = "uploaded_files/".$qualification;
       //prepare statement
       $insert_query = "INSERT INTO tbl_employee(name,address,birth,designation,gender,email,telephone,school_graduated,qualification_title,document)VALUES (?,?,?,?,?,?,?,?,?,?)";
       $stmt=$con->prepare($insert_query);
      /* if(!$stmt){
           //manage error
           echo "error in your query" ;
           exit;
       }*/
       $stmt->bind_param("ssssssssss",$name,$address,$birth,$designation,$gender,$email,$telephone,$school_graduated,$qualification_title,$upload);
       $stmt->execute();
       //move document to their permanent directory
       move_uploaded_file($_FILES['document']['tmp_name'],$upload);

       echo "<script> alert ('Record inserted and file uploaded Successfully')</script>";
    }
?>